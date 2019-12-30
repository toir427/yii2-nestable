/**
 * Created by toir427 on 3/2/18.
 */

function updateOutput(e) {
    var list = e.length ? e : $(e.target),
        output = list.data("output");

    if (window.JSON) {
        output.html(window.JSON.stringify(list.nestable("serialize")));
    } else {
        output.html("JSON browser support required for this demo.");
    }
};