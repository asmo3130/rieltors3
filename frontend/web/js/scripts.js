//alert('Hello');
//$('.container').append('<p>SHOW!!!</p>')

// $('.btn-success').on('submit', function () {
//     $.ajax({
//         method: "POST",
//         url: "searchResult",
//         data: $('#test-form').data()
//     })
//         .done(function(data) {
//              alert(data);
//             window.location.href = 'nonregistered';
//         });
// });
var tab; // заголовок вкладки
var tabContent; // блок содержащий контент вкладки


window.onload=function() {
    tabContent=document.getElementsByClassName('tabContent');
    tab=document.getElementsByClassName('tab');
    hideTabsContent(1);
}

document.getElementById('tabs').onclick= function (event) {
    var target=event.target;
    if (target.className=='tab') {
        for (var i=0; i<tab.length; i++) {
            if (target == tab[i]) {
                showTabsContent(i);
                break;
            }
        }
    }
}

function hideTabsContent(a) {
    for (var i=a; i<tabContent.length; i++) {
        tabContent[i].classList.remove('show');
        tabContent[i].classList.add("hide");
        tab[i].classList.remove('whiteborder');
    }
}

function showTabsContent(b){
    if (tabContent[b].classList.contains('hide')) {
        hideTabsContent(0);
        tab[b].classList.add('whiteborder');
        tabContent[b].classList.remove('hide');
        tabContent[b].classList.add('show');
    }
}

var test = document.getElementById('filter-lviv_sections');
test.addEventListener('change', Selected);

function Selected(event) {
    var label = event.target.value;
   // console.log(label);
    if (label == 1) {
        document.querySelector('.field-filter-strit').style.display = 'none';
        document.querySelector('.field-filter-sity').style.display = 'none';
        //alert("Yes");
    }
    else
    {
        document.querySelector('.field-filter-strit').style.display = 'block';
        document.querySelector('.field-filter-sity').style.display = 'block';
    }
}

var testic = document.getElementById('filter-oblast');
testic.addEventListener('change', Selectedis);

function Selectedis(eventic) {
    var label = eventic.target.value;
    // console.log(label);
    if (label == 3 || label == 26 || label == 10 || label == 4) {
        document.querySelector('.field-filter-strit').style.display = 'block';
        //alert("Yes");
    }
    else
    {
        document.querySelector('.field-filter-strit').style.display = 'none';
    }
}
