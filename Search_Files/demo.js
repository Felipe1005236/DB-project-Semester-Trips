$( ".selector").autocomplete({
    appendTo: "#someElem"
});

// Getter
var appendTo = $(".selector").autocomplete("option", "appendTo");

// Setter
$(".selector").autocomplete("option", "appendTo", "#someElem");

$(".selector").autocomplete({
    autoFocus: true
});

// Getter
var autoFocus = $(".selector").autocomplete("option", "autoFocus");

// Setter
$(".selector").autocomplete("option", "autoFocus", true);

$(".selector").autocomplete({
    classes: {
        "ui-autocomplete": "highlight"
    }
});

// Getter 
var themeClass = $(".selector").autocomplete("option", "classes.ui-autocomplete");

// Setter 
$(".selector").autocomplete("option", "classes.ui-autocomplete", "highlight");

$(".selector").autocomplete({
    disabled: true
});

// Getter
var disabled = $(".selector").autocomplete("option", "disabled");

// Setter 
$(".selector").autocomplete("option", "disabled", true);

$(".selector").autocomplete({
    minLength: 0
});

// Getter 
var minLength = $(".selector").autocomplete("option", "minLength");

// Setter 
$(".selector").autocomplete("option", "minLength", 0);

$(".selector").autocomplete({
    position: {my : "right top", at: "right bottom"}
});

// Getter
var position = $(".selector").autocomplete("option", "position");

// Setter
$(".selector").autocomplete("option", "position", {my : "right top", at: "right bottom"});

$(".selector").autocomplete({
    delay: 500
});

// Getter
var delay = $(".selector").autocomplete("option", "delay");

// Setter 
$(".selector").autocomplete("option", "delay", 500);

// I have declared all of the variables which make the autocomplete work in terms of search and position
// The things above were options

$(".selector").autocomplete({
    source: ["Hamburg", "Bremen", "Dresden", "Hannover"]
});

// Getter 
var source = $(".selector").autocomplete("option", "source");

// Setter
$(".selector").autocomplete("option", "source", ["Hamburg", "Bremen", "Dresden", "Hannover"]);

$(".selector").autocomplete("close");
$(".selector").autocomplete("destroy");
$(".selector").autocomplete("disable");

// Close just closes the autocomplete while destroy completely erases it to reboot it
// Disable is just a temp disable

$(".selector").autocomplete("enable");
$(".selector").autocomplete("instance");

// Used in order to create instances of the enabled autocomplete

var isDisabled = $(".selector").autocomplete("option", "disabled");

var options = $(".selector").autocomplete("option");

$(".selector").autocomplete("option", "disabled", true);

$(".selector").autocomplete("option", {disabled: true});

$(".selector").autocomplete("search", "");

$(".selector").autocomplete("widget");

// Declared the options and widgets

_renderItem: function(ul, item){
    return $("<li>")
        .attr("data-value", item.value)
        .append(item.label)
        .appendTo(ul);
}

_renderMenu: function(ul, items){
    var that = this;
    $.each(items, function(index, item){
        that._renderItemData(ul,item);
    })
    $(ul).find("li").off().addClass("odd");
}

_resizeMenu: function(){
    this.menu.element.outerWidth(500);
}

$(".selector").autocomplete({
    change: function(event, ui) {}
})

$(".selector").on("autocompletechange", function(event, ui) {});

// Functions for the ui and autocomplete

$(".selector").autocomplete({
    close: function(event, ui) {}
})

$(".selector").on("autocompleteclose", function(event, ui) {});

$(".selector").autocomplete({
    create: function(event, ui) {}
})

$(".selector").on("autocompletecreate", function(event, ui) {});

// Event functions

$(".selector").autocomplete({
    focus: function(event, ui) {}
});

$(".selector").on("autocompletefocus", function(event, ui) {});

$(".selector").autocomplete({
    open: function(event, ui) {}
});

$(".selector").on("autocompleteopen", function(event, ui) {});

$(".selector").autocomplete({
    response: function(event, ui) {}
});

$(".selector").on("autocompleteresponse", function(event, ui) {});

$(".selector").autocomplete({
    search: function(event, ui) {}
});

$(".selector").on("autocompletesearch", function(event, ui) {});

$(".selector").autocomplete({
    select: function(event, ui) {}
});

$(".selector").on("autocompleteselect", function(event, ui) {});
