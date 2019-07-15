let elemPosition = 0;
let realElemPositionY = 0;
let mouseY = 0;
let dropTop = false, dropBottom = false;
let draggedElement = null;
let allowDrop = 0;
let activeTarget = false;

$(document).ready(function (e) {
    $(document).on("click", "html", function (e) {
        if ($(e.target).parents('#website-preview').length && e.target.className.includes('not-selectable') === false) {

            if (activeTarget) {
                $('.border-component').css('border', 'none');
                $('.border-component').removeClass('border-component');
            }

            $(e.target).addClass("border-component");
            $(e.target).css("border-top", "2px solid red");
            $(e.target).css("border-bottom", "2px solid red");
            activeTarget = true;
            retrieveProperties(e.target);

            $('#delete-html').click(function() {
              deleteComponent(e.target);
            })

            $(e.target).click(function() {
              $(e.target).attr('onclick',modifyCss);
            });
        }
    });
});

function deleteComponent(e) {
    $(".border-component").remove();
}

function retrieveProperties(e) {

    $('#valid-html').click(function() {
      let content = $('#textarea-content').val();

      let style = {
          "opacity": $('#opacity').val(),
          "background-color": $('#background-color').val(),
          "color": $('#color').val(),
          "font-family": $('#font-family').val(),
          "font-size": $('#font-size-input').val() + $('#font-size-select').val(),
          "font-weight": $('#font-weight').val(),
          "width": $('#width-input').val() + $('#width-select').val(),
          "height": $('#height-input').val() + $('#height-select').val()
      }
      if (content !== "") {
        $(".border-component").text(content);
        $('#textarea-content').val("");
      }
      $(".border-component").css(style);
    })
}

initHandler();
addDnDHandlers();

function initHandler() {
    let addableContent = $('.draggable');

    for (let k = 0; k < addableContent.length; k++) {
        addableContent[k].addEventListener('dragstart', dragStart);
    }
}

function addDnDHandlers() {
    let droppers = $('.dropper').find("> *");

    for (let i = 0; i < droppers.length; i++) {
        droppers[i].setAttribute("draggable", "true");
        droppers[i].addEventListener('dragstart', dragStart);
        droppers[i].addEventListener('dragover', dragOver);
        droppers[i].addEventListener('drop', drop);
        droppers[i].addEventListener('dragenter', dragEnter);
        droppers[i].addEventListener('dragleave', dragLeave);
    }
}

function dragStart(e) {

    draggedElement = this;

    if (this.outerHTML.includes("draggable") || $(this).parents("#add-content") ) {
        allowDrop = 1;
    }

    if (draggedElement.parentNode.getAttribute('id') === "add-content") {
        e.dataTransfer.setData('text/html', this.innerHTML);
    } else {
        e.dataTransfer.setData('text/html', this.outerHTML);
    }

}

function dragOver(e) {

    if (e.preventDefault())
        e.preventDefault();

    mouseY = e.pageY;

    if (mouseY > realElemPositionY && mouseY < (realElemPositionY + (elemPosition.height / 2))) {

        if ($(e.target).parent().attr("id") === "website-preview" ||
            $(e.target).parents(".dropper > *").length) {
            $(e.target).closest(".dropper > *").css("background",'url("/public/img/up-arrow.svg") no-repeat');
            $(e.target).closest(".dropper > *").css("background-size",'40px');
        }

        dropTop = true;
        dropBottom = false;
    } else {

        if ($(e.target).parent().attr("id") === "website-preview" ||
            $(e.target).parents(".dropper > *").length) {
            $(e.target).closest(".dropper > *").css("background",'url("/public/img/down-arrow.svg") no-repeat');
            $(e.target).closest(".dropper > *").css("background-size",'40px');

        }

        dropTop = false;
        dropBottom = true;
    }
}

function drop(e) {

    let dropHTML = e.dataTransfer.getData('text/html');

    if (allowDrop) {

        if (dropTop) {
            $(e.target).closest(".dropper > *").before(dropHTML);
        }

        if (dropBottom) {
            $(e.target).closest(".dropper > *").after(dropHTML);
        }
    }

    $(e.target).closest(".dropper > *").css("background",'');
    $("#example").remove();

    if (draggedElement.parentNode.getAttribute('id') === "dropper") {
        draggedElement.remove();
    }

    addDnDHandlers();

    allowDrop = 0;
}

function dragEnter(e) {
    e.preventDefault();

    elemPosition = e.target.closest(".dropper > *").getBoundingClientRect();
    realElemPositionY = Number(elemPosition.y) + Number(window.pageYOffset);
}

function dragLeave(e) {
    $(e.target).closest(".dropper > *").css("background",'');
}



$('#menu-right-css').hide();

function modifyCss(e) {
    $('#add-content').css('display', 'none');
    $('#menu-right-css').css('display', 'flex');
}

function closeCss() {
    $('#add-content').css('display', 'flex');
    $('#menu-right-css').css('display', 'none');
}

$('.snippet').hide();

$('.showSnippet').each(function() {
    $(this).show(0).on('click', function(e) {
        e.preventDefault();
        $(this).next('.snippet').slideToggle('fast');
    });
});
