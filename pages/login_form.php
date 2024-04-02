<div class="circle">
                <img src="image/user.png" alt="личный кабинет" id="login">
                    <div class="popup">
                        <div class="popup__container">
                            <div class="popup__wrapper">
                                <div id="popup_anime">
                                        <form action="pages/autorisation.php" autocomplete="off" method="POST">
                                        <div class="form-element">
                                            <label> <h2 class="shadow">Авторизация</h2></label>
                                            <img class="img__login" id="close__box" src="../image/icons/x.png" alt="крестик">
                                        </div>
                                        
                                        <div class="form-element">
                                            <label><p>Логин:</p></label>
                                            <input type="text" name="login" pattern="[a-zA-Z0-9]+" placeholder="Введите логин" required />
                                        </div>
                                        <div class="form-element">
                                            <label><p>Пароль:</p></label>
                                            <input type="password" name="password" placeholder="Введите пароль" required />
                                        </div>
                                        <input type="submit" class="button" value="Войти">
                                    </form>
  
                                </div>
                            </div>
                        </div>
                </div>
<script>
const button = document.querySelector('#login');
const button1 = document.querySelector('#close__box');
const form = document.querySelector('#popup_anime');
const popup = document.querySelector('.popup');
button.addEventListener('click', () => {
  form.classList.add('open');
  popup.classList.add('popup_open');
});

button1.addEventListener('click', () => {
location.reload();
});
</script>
            </div>