  document.addEventListener('DOMContentLoaded', function() {


  
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);


           var elems = document.querySelectorAll('.datepicker');
           var instances = M.Datepicker.init(elems);
           var elems = document.querySelectorAll('select');
           var instances = M.FormSelect.init(elems);
           var elems = document.querySelectorAll('.sidenav');
           var instances = M.Sidenav.init(elems);
           var elems = document.querySelectorAll('.modal');
           var instances = M.Modal.init(elems);
           var elems = document.querySelectorAll('.dropdown-trigger');
           var instances = M.Dropdown.init(elems);
           var elems = document.querySelectorAll('.carousel');
           var instances = M.Carousel.init(elems);
           var instance = M.Carousel.init({
              fullWidth: true
                  });


            }); 

