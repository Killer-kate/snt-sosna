/* information.html */
/************information******************/
let info1 = document.querySelector("#info__block1");
let button10 = document.querySelector("#but1");

let info2 = document.querySelector("#info__block2");
let button20 = document.querySelector("#but2");

let info3 = document.querySelector("#info__block3");
let button30 = document.querySelector("#but3");

let info4 = document.querySelector("#info__block3__1");
let button40 = document.querySelector("#but4");

let info5 = document.querySelector("#info__block3__2");
let button50 = document.querySelector("#but5");

button10.onclick = function(){
    info1.classList.remove('d_none');
    info2.classList.add('d_none');
    info3.classList.add('d_none');

    button10.classList.add('active__point');
    button20.classList.remove('active__point');
    button30.classList.remove('active__point');
}

button20.onclick = function(){
    info2.classList.remove('d_none');
    info1.classList.add('d_none');
    info3.classList.add('d_none');

    button20.classList.add('active__point');
    button10.classList.remove('active__point');
    button30.classList.remove('active__point');
}

button30.onclick = function(){
    info3.classList.remove('d_none');
    info1.classList.add('d_none');
    info2.classList.add('d_none');

    button30.classList.add('active__point');
    button10.classList.remove('active__point');
    button20.classList.remove('active__point');
}



button40.onclick = function(){
    info4.classList.remove('d_none');
    info5.classList.add('d_none');

    button40.classList.add('active__point');
    button50.classList.remove('active__point');
}

button50.onclick = function(){
    info5.classList.remove('d_none');
    info4.classList.add('d_none');


    button50.classList.add('active__point');
    button40.classList.remove('active__point');
}
