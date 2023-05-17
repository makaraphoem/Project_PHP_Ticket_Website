const show_dialog = document.querySelector('#account');
const  diload = document.querySelector('#form-dialog');
let boolean = true;
function show(element)
{
    element.style.display = "block";
};

function hide(element)
{
    element.style.display = "none";
};

function showDialog(event) 
{
    if (boolean == true)
    {
        show(diload);
        boolean = false;
    }else if(boolean == false)
    {
        hide(diload);
        boolean = true;
    } 
};
show_dialog.addEventListener('click', showDialog);

