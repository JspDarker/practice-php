var persons = [
    {
        'name': 'Jon soh jung',
        'email': 'thanh@gmail.com',
        'city': 'holland'
    },
    {
        'name': 'no disk lien',
        'email': 'lien@gmail.com',
        'city': 'Japan'
    },
    {
        'name': 'just Dah',
        'email': 'dag@gmail.com',
        'city': 'american'
    }
];
/*** ================================================================================= **/


/*** ================================================================================= **/

/*** ======= DEMO AJAX AND JSON FOR RAW RENDER HTML ============== **/
var pageCounter = 1;
var demoContainer = document.getElementById('demoHTML');
var buttonGet = document.getElementById('getButton');

buttonGet.addEventListener('click', function() {
    // alert("hello JavaScript");

    var demo = new XMLHttpRequest();
    demo.open('GET', 'https://learnwebcode.github.io/json-example/animals-'+ pageCounter +'.json');
    demo.onload = function() {
        // console.log(demo.responseText);

        // var ourData = demo.responseText;
        // console.log(ourData[0]);

        var ourData = JSON.parse(demo.responseText);
        // console.log(ourData[0]);
        renderHTML(ourData);
        pageCounter++;
        if( pageCounter >3) {
            buttonGet.classList.add("hide-me");
        }

    };

    demo.send();
});

var renderHTML = function(arrays) {

    var insertHTML = '';
    var len = arrays.length;

    for(var i = 0; i < len; i++){
        insertHTML += ['<p>',arrays[i].name,'is a', arrays[i].species].join(' ');

        insertHTML += ' {in likes} ';
        for(var ii = 0; ii< arrays[i].foods.likes.length; ii++){
            insertHTML += arrays[i].foods.likes[ii] + ' ';
        }

        insertHTML += ' [in dislikes] ';
        for(var iii = 0; iii< arrays[i].foods.dislikes.length; iii++){
            insertHTML += arrays[i].foods.dislikes[iii] + ' ';
        }
        insertHTML += '.</p>';
    }

    // demoContainer.insertAdjacentHTML('beforeend','this can variable');
    demoContainer.insertAdjacentHTML('beforeend',insertHTML);
};


