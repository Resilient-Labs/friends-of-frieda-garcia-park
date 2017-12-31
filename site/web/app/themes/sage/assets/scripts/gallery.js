(function() {
    // Variables
    var gallery = document.getElementsByClassName('gallery');
    var galleryImages = document.querySelectorAll('.gallery img');
    var galleryModal = document.getElementById('gallery-modal');
    var galleryModalRow = document.getElementById('gallery-modal-row');

    // Helper Functions
    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }

    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }
    
    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }

    if (gallery.length) {
        // gallery on this page
        Array.from(galleryImages).forEach( function(element) {
            element.addEventListener('click', function() {
                var copy = element.cloneNode(true); // create a copy of the element as to not manipulate the original
                // TODO: add check for if there is an attribute
                var ptag = document.createElement("p"); // create a paragraph tag
                var caption = document.createTextNode( copy.getAttribute('caption') ); // grab caption from the image
                ptag.appendChild(caption); // add the caption text to the paragraph 

                if ( hasClass(galleryModal, 'hidden') ) {
                    galleryModalRow.appendChild(copy);
                    galleryModalRow.appendChild(ptag);
                    removeClass(galleryModal, 'hidden');
                } else {
                    addClass(galleryModal, 'hidden');
                    galleryModalRow.removeChild(copy);
                }
            });
        });
        galleryModal.onclick = function() {
            addClass(galleryModal, 'hidden');
            while ( galleryModalRow.hasChildNodes() ) {
                galleryModalRow.removeChild(galleryModalRow.lastChild);
            }
        };
    } else {
        // no gallery on this page
    }

})();