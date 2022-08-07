//comment
var maintree;
function initialize() {
    var canvas = document.getElementById("canvas");
        var context = canvas.getContext("2d");
        context.font = 'Italic 10pt fantasy';
        // context1 = canvas.font,
        tree = TREE.create("Kunle Adedigba", "Chairman / Chief Executive Officer"),
        nodes = TREE.getNodeList(tree),
        currNode = tree,
        add_child_button = document.getElementById("add_child"),
        remove_node = document.getElementById("remove_node"),
        edit_node = document.getElementById("edit_node"),
        zoom_in = document.getElementById("zoom_in"),
        zoom_out = document.getElementById("zoom_out");

    canvas.addEventListener("click", function (event) {
        var x = event.pageX - canvas.offsetLeft,
            y = event.pageY - canvas.offsetTop;
        for (var i = 0; i < nodes.length; i++) {
            if (x > nodes[i].xPos && y > nodes[i].yPos && x < nodes[i].xPos + nodes[i].width && y < nodes[i].yPos + nodes[i].height) {
                currNode.selected(false);
                nodes[i].selected(true);
                currNode = nodes[i];
                TREE.clear(context);
                TREE.draw(context, tree);
                updatePage(currNode);
                break;
            }
        }
    }, false);

    canvas.addEventListener("mousemove", function (event) {
        var x = event.pageX - canvas.offsetLeft,
            y = event.pageY - canvas.offsetTop;
        for (var i = 0; i < nodes.length; i++) {
            if (x > nodes[i].xPos && y > nodes[i].yPos && x < nodes[i].xPos + nodes[i].width && y < nodes[i].yPos + nodes[i].height) {
                canvas.style.cursor = "pointer";
                break;
            }
            else {
                canvas.style.cursor = "auto";
            }
        }
    }, false);
    add_child_button.addEventListener('click', function (event) {
        currNode.addChild(TREE.create("Child of " + currNode.text));
        TREE.clear(context);
        nodes = TREE.getNodeList(tree);
        TREE.draw(context, tree);
    }, false);
    remove_node.addEventListener('click', function (event) {
        TREE.destroy(currNode);
        TREE.clear(context);
        nodes = TREE.getNodeList(tree);
        TREE.draw(context, tree);
    }, false);
    edit_node.addEventListener('click', function (event) {
        TREE.edit(currNode);
      
    }, false);
    zoom_in.addEventListener('click', function (event) {
        for (var i = 0; i < nodes.length; i++){
            nodes[i].width *= 1.05;
            nodes[i].height *= 1.05;
        }
        TREE.config.width *= 1.05;
        TREE.config.height *= 1.05;
        TREE.clear(context);
        TREE.draw(context, tree);
    }, false);
    zoom_out.addEventListener('click', function (event) {
        for (var i = 0; i < nodes.length; i++){
            nodes[i].width = nodes[i].width * 0.95;
            nodes[i].height = nodes[i].height * 0.95;
        }
        TREE.config.width *= 0.95;
        TREE.config.height *= 0.95;
        TREE.clear(context);
        TREE.draw(context, tree);
    }, false);
    context.canvas.width = document.getElementById("main").offsetWidth;
    context.canvas.height = document.getElementById("main").offsetHeight;
    populateDummyData(tree);
    nodes = TREE.getNodeList(tree);
    TREE.draw(context, tree);
    maintree = tree;
}

function updatePage(tree) {
    const name = document.getElementById("name");
    const position = document.getElementById("position");
    position.innerHTML = tree.position;
    name.innerHTML = tree.text;
    console.log(tree)
}

function populateDummyData(tree) {
    tree.selected(true);
    updatePage(tree);
    tree.addChild(TREE.create("Sam Omajala", "General Manager - Golden Tulip Ibadan & Five Continents"));
    tree.addChild(TREE.create("Mardiyyah Adegoke", "Manager, Human Capital & Admin"));
    tree.addChild(TREE.create("Vacant", "Head, Projects"));
    tree.addChild(TREE.create("Luqmon Asimolowo", "Chief Financial Officer"));
    tree.addChild(TREE.create("Emmanuel Okolo", "Head, Strategy & Corporate Devt."));
    tree.addChild(TREE.create("Joseph Ushiale", "Manager, Standards & Measures"));
    tree.addChild(TREE.create("Nelson Roland", "General Manager - Golden Tulip Oniru Suites & Lekki"));
    tree.addChild(TREE.create("Vacant", "Facility Manager - Golden Tulip Residences"));
    tree.addChild(TREE.create("Vacant", "Head, Internal Audit & Cost Control"));
    tree.getChildAt(0).addChild(TREE.create("Abayomi Obaseesin", "Head, Maintanance Ibadan"));
    // tree.getChildAt(1).addChild(TREE.create("Vaella"));
    tree.getChildAt(6).addChild(TREE.create("Rumbi Nazare", "Operation Manager - Golden Tulip Oniru & Rhodax Court"));
    tree.getChildAt(6).addChild(TREE.create("Tope Oriowo", "Head, Maintanance Lagos"));
}