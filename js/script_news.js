/************ news *********************/
let infon1 = document.querySelector("#info__block1n");
let buttonn1 = document.querySelector("#but1n");

let infon2 = document.querySelector("#info__block2n");
let buttonn2 = document.querySelector("#but2n");

let infon3 = document.querySelector("#info__block3n");
let buttonn3 = document.querySelector("#but3n");

let infon4 = document.querySelector("#info__block4n");
let buttonn4 = document.querySelector("#but4n");


buttonn1.onclick = function(){
    infon1.classList.remove('d_none');
    infon2.classList.add('d_none');
    infon3.classList.add('d_none');
    infon4.classList.add('d_none');

    buttonn1.classList.add('active__point');
    buttonn2.classList.remove('active__point');
    buttonn3.classList.remove('active__point');
    buttonn4.classList.remove('active__point');
}

buttonn2.onclick = function(){
    infon2.classList.remove('d_none');
    infon1.classList.add('d_none');
    infon3.classList.add('d_none');
    infon4.classList.add('d_none');

    buttonn2.classList.add('active__point');
    buttonn1.classList.remove('active__point');
    buttonn3.classList.remove('active__point');
    buttonn4.classList.remove('active__point');
}

buttonn3.onclick = function(){
    infon3.classList.remove('d_none');
    infon1.classList.add('d_none');
    infon2.classList.add('d_none');
    infon4.classList.add('d_none');

    buttonn3.classList.add('active__point');
    buttonn1.classList.remove('active__point');
    buttonn2.classList.remove('active__point');
    buttonn4.classList.remove('active__point');
}

buttonn4.onclick = function(){
    infon4.classList.remove('d_none');
    infon1.classList.add('d_none');
    infon2.classList.add('d_none');
    infon3.classList.add('d_none');

    buttonn4.classList.add('active__point');
    buttonn1.classList.remove('active__point');
    buttonn2.classList.remove('active__point');
    buttonn3.classList.remove('active__point');
}