
/************ forum *********************/
let infof1 = document.querySelector("#info__block1f");
let buttonf1 = document.querySelector("#but1f");

let infof2 = document.querySelector("#info__block2f");
let buttonf2 = document.querySelector("#but2f");

let infof3 = document.querySelector("#info__block3f");
let buttonf3 = document.querySelector("#but3f");

let infof4 = document.querySelector("#info__block4f");
let buttonf4 = document.querySelector("#but4f");


buttonf1.onclick = function(){
    infof1.classList.remove('d_none');
    infof2.classList.add('d_none');
    infof3.classList.add('d_none');
    infof4.classList.add('d_none');

    buttonf1.classList.add('active__point');
    buttonf2.classList.remove('active__point');
    buttonf3.classList.remove('active__point');
    buttonf4.classList.remove('active__point');
}

buttonf2.onclick = function(){
    infof2.classList.remove('d_none');
    infof1.classList.add('d_none');
    infof3.classList.add('d_none');
    infof4.classList.add('d_none');

    buttonf2.classList.add('active__point');
    buttonf1.classList.remove('active__point');
    buttonf3.classList.remove('active__point');
    buttonf4.classList.remove('active__point');
}

buttonf3.onclick = function(){
    infof3.classList.remove('d_none');
    infof1.classList.add('d_none');
    infof2.classList.add('d_none');
    infof4.classList.add('d_none');

    buttonf3.classList.add('active__point');
    buttonf1.classList.remove('active__point');
    buttonf2.classList.remove('active__point');
    buttonf4.classList.remove('active__point');
}

buttonf4.onclick = function(){
    infof4.classList.remove('d_none');
    infof1.classList.add('d_none');
    infof2.classList.add('d_none');
    infof3.classList.add('d_none');

    buttonf4.classList.add('active__point');
    buttonf1.classList.remove('active__point');
    buttonf2.classList.remove('active__point');
    buttonf3.classList.remove('active__point');
}