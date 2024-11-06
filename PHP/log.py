import re
from collections import defaultdict
from datetime import datetime
import matplotlib.pyplot as plt
import os
import argparse

access_log_path = r"C:\Users\ribad\semester_trips\access.log"
error_log_path = r"C:\Users\ribad\semester_trips\error.log"

a_log: dict[str, list] = {}
e_log: dict[str, list] = {}

access_pattern = re.compile(r'(?P<ip>\d+\.\d+\.\d+\.\d+) - - \[(?P<time>[^\]]+)\] "(?P<method>\w+) \/~rfelipe(?P<page>.+) HTTP\/1\.1" (?P<status_code>\d+ \d+) "(.)" "(?P<browser>.+)"')
error_pattern = re.compile(r'\[(?P<timestamp>[^\]]+)\] \[.*\] \[client (?P<ip>\d+\.\d+\.\d+\.\d+)(:\d+)?\] (?P<error_message>.*)')

def parse_a_log(log):

    matched = access_pattern.match(log)
    if matched:
        ip = matched.group("ip")
        time = matched.group("time")
        time_real = datetime.strptime(time, '%d/%b/%Y:%H:%M:%S %z')
        method = matched.group("method")
        page = matched.group("page")
        status = matched.group("status_code")
        browser = matched.group("browser")

        if ip not in a_log:
            a_log[ip] = []
        a_log[ip].append({'time': time_real, 'method': method, 'page': page, 'status_code': status, 'browser': browser})

def parse_e_log(log):
    matched = error_pattern.match(log)
    if matched:
        time = matched.group("timestamp")
        time_real = datetime.strptime(time, '%a %b %d %H:%M:%S.%f %Y')  # Adjusted format
        ip = matched.group("ip")
        error = matched.group("error_message")

        if re.search("rfelipe", error):
            if ip not in e_log:
                e_log[ip] = []
            e_log[ip].append({
                'timestamp': time_real,
                'error_message': error
            })


# Read and parse logs
with open(access_log_path, 'r') as access_log:
    for line in access_log:
        parse_a_log(line)

with open(error_log_path, 'r') as error_log:
    for line in error_log:
        parse_e_log(line)

a_time = [access['time'] for stats in a_log.values() for access in stats]
e_time = [error['timestamp'] for stats in e_log.values() for error in stats]

access_times_ip = {ip: [elem["time"] for elem in stats] for ip, stats in a_log.items()}
error_time_ip = {ip: [elem["timestamp"] for elem in stats] for ip, stats in e_log.items()}
access_time_browser = {}

for ip, stats in a_log.items():
    for access in stats:
        if access['browser'] not in access_time_browser:
            access_time_browser[access['browser']] = []
        access_time_browser[access['browser']].append(access['time'])

fig, ax = plt.subplots(3, figsize=(20,25))

for ip, stamps in access_times_ip.items():
    ax[0].hist(stamps, bins=150, alpha=0.7, label=ip, histtype="stepfilled", 
               range=(a_time[0], a_time[-1]))

for browser, stamps in access_time_browser.items():
    ax[1].hist(stamps, bins=150, alpha=0.7, label=browser, histtype="stepfilled", 
               range=(a_time[0], a_time[-1]))


for ip, stamps in error_time_ip.items():
    ax[2].hist(stamps, bins=150, alpha=0.7, label=ip, histtype="stepfilled", 
               range=(e_time[0], e_time[-1]))


ax[0].set_xlabel('Timestamp')
ax[0].set_ylabel('Frequency')
ax[0].set_title('Access Timeline')
ax[0].legend()

ax[1].set_xlabel('Timestamp')
ax[1].set_ylabel('Frequency')
ax[1].set_title('Access Timeline (Browsers)')
ax[1].legend()

ax[2].set_xlabel('Timestamp')
ax[2].set_ylabel('Frequency')
ax[2].set_title('Error Timeline')
ax[2].legend()

plt.savefig('stats.pdf')  

plt.show()