/* information.html */
/************information******************/
let infog1 = document.querySelector("#info__block1g");
let buttong1 = document.querySelector("#but1g");

let infog2 = document.querySelector("#info__block2g");
let buttong2 = document.querySelector("#but2g");

buttong1.onclick = function(){
    infog1.classList.remove('d_none');
    infog2.classList.add('d_none');

    buttong1.classList.add('active__point');
    buttong2.classList.remove('active__point');
}

buttong2.onclick = function(){
    infog2.classList.remove('d_none');
    infog1.classList.add('d_none');

    buttong2.classList.add('active__point');
    buttong1.classList.remove('active__point');
}
