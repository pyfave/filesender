<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
<h3>Добро пожаловать в FileSender</h3>

<p>
    FileSender - это веб-приложение, которое позволяет аутентифицированным<br /> 
    пользователям легко и безопасно отправлять файлы большого объема другим<br />
    пользователям<br />
    Пользователям без учетной записи аутентифицированные пользователи могут <br />
    отправить гостевой ваучер, который позволит загрузить файлы на сервер.<br /><br />
    FileSender разработан для нужд высшего образования и научного сообщества.<br />
</p>

<h4>Для гостей</h4>

<p>
    Если вы получили гостевой ваучер с этого сайта, то это позволит вам <br />
    загрузить файлы на этот сервер. Самый простой способ - воспользоваться <br />
    краткой инструкцией из пригласительного письма.<br />
    Когда вы загружаете файлы как гость, то убедитесь в том, что все ссылки<br />
    из пригласительного письма относятся к FileSender-у того научного <br />
    учреждения, которому вы доверяете.<br />
    Если вы не ожидали получить такое письмо, то оно может быть нелигитимным.<br />
</p>
<p>
    Получив приглашение, вы можете поделиться файлами с другими пользователями<br />
    при помощи ссылки.<br />
    Если эта возможность недоступна, то можно вписать адреса электронной почты<br />
    других пользователей, с которыми вы хотите поделиться файлами.<br />
</p>

<h4>Для аутентифицированных пользователей</h4>

<p>
    Если эта инсталляция FileSender находится в пределах вашего научного<br />
    учреждения, то по кнопке <b>Вход</b> в правом верхнем углу вы сможете<br />
    войти при помощи вашей учетной записи.<br />
    Если вы не уверены какая учетная запись подходит или возникли трудности<br />
    со входом, то обратитесь в вашу техническую поддержку.<br />
</p>

<p>
    Как аутентифицированный пользователь вы можете загружать файлы на сервер,<br />
    указывать получателей адресами электронной почты для скачивания<br />
    или сами отправлят ссылку на скачивание другим пользователям.<br />
    Так же вам доступна возможность приглашать других участников в роли гостей<br />
</p>

<h3>Возможные ограничения на скачивание</h3>
<p>
    Любой современный браузер позволяет скачивать файлы любого размера.<br />
    Никаких дополнительных программ не требуется.
</p>

<h3>Возможные ограничения загрузки на сервер</h3>

<p>
    Если ваш браузер поддерживает HTML5, то вы можете загружать файлы на сервер<br />
    любого размера вплоть до {size:cfg:max_transfer_size}.<br />
    Текущие версии Firefox и Chrome для Windows, Mac OS X и Linux имеют поддержку HTML5.<br />
</p>

<h3>Возможности вашего браузера</h3>
<ul class="fa-ul">
    <li data-feature="html5"><img src="images/html5_installed.png" alt="HTML5 upload enabled" /> Вы можете загружать файлы размером до  {size:cfg:max_transfer_size} на каждый трансфер и возобновлять загрузку на сервер.</li>
    <li data-feature="nohtml5"><img src="images/html5_none.png" alt="HTML5 upload disabled" /> Вы можете загружать файлы размером до {size:cfg:max_legacy_file_size} каждый и до {size:cfg:max_transfer_size} на каждый трансфер.</li>
</ul>

<h3>Загрузка на сервер файлов любого размера с HTML5</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i>Вам доступен этот метод, если выше есть такой значок: <img src="images/html5_installed.png" alt="HTML5 upload enabled" /> </li>
    <li><i class="fa-li fa fa-caret-right"></i>Для этой возможности используйте последнюю версию браузера, поддерживающего HTML5.</li>
    <li><i class="fa-li fa fa-caret-right"></i>Последние версии Firefox и Chrome для Windows, Mac OS X и Linux точно это умеют.</li>
    <li><i class="fa-li fa fa-caret-right"></i>
        Вы можете <strong>возобновить</strong> прерванную или отмененную загрузку на сервер.<br />
        Для возобновления просто загрузите <strong>те же файлы</strong> снова!<br />
        Убедитесь, что файлы имеют <strong>те же имена и размеры</strong> как и раньше.<br />
        Когда загрузка на сервер возобновится, то индикатор загрузки покажет <br />вам с какого места этот процесс продолжается.
    </li>
</ul>

<h3>Загрузка на сервер файлов размером до {size:cfg:max_legacy_file_size} на каждый файл ( браузер без поддержки HTML5 )</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i>FileSender предупредит вас о том, что размер файла слишком велик.</li>
    <li><i class="fa-li fa fa-caret-right"></i>Возобновление загрузок не поддерживается.</li>
</ul>

<h3>Сконфигурированные возможности сервера</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i><strong>Максимальное количество получателей по электронной почте : </strong>{cfg:max_transfer_recipients} ( адреса разделять точкой с запятой ) </li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Максимальное количество файлов на один трансфер : </strong>{cfg:max_transfer_files}</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Максимальный размер трансфера : </strong>{size:cfg:max_transfer_size}</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Максимальный размер файла для браузера без поддержки HTML5 : </strong>{size:cfg:max_legacy_file_size}</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Срок жизни трансфера : </strong>{cfg:default_transfer_days_valid} ( макс.:  {cfg:max_transfer_days_valid})</li>
    <li><i class="fa-li fa fa-caret-right"></i><strong>Срок жизни гостя : </strong>{cfg:default_guest_days_valid} (макс.:  {cfg:max_guest_days_valid})</li>
</ul>

<h3>Технчиеские детали</h3>
<ul class="fa-ul">
    <li><i class="fa-li fa fa-caret-right"></i>
        <strong>{cfg:site_name}</strong> использует программное обеспечение <a href="http://www.filesender.org/" target="_blank">FileSender</a>.<br />
        FileSender показывает когда возможно использовать HTML5, а когда нет.<br />
        Это в основном зависит от функциоанала браузера в большей степени и в меньшей от HTML5 FileAPI.<br />
        Попробуйте использовать <a href="http://caniuse.com/fileapi" target="_blank">этот</a> сайт для определения того, на сколько хорошо поддерживает тот или иной браузер ( и его версии ) HTML5 FileAPI, <a href="http://caniuse.com/filereader" target="_blank">FileReader API</a> и <a href="http://caniuse.com/bloburls" target="_blank">Blob URLs</a><br />
        Поля, окрашенные зеленым, показывают какой браузер и какой версии поддерживают файлы большего размера, чем  {size:cfg:max_legacy_file_size}.<br />
        Обратите внимание, что хоть Opera 12 и оъявлена как поддерживающая HTML5 FileAPI, на самом деле не поддерживает весь необходимый функционал для FileSender.<br />
    </li>
</ul>

<p>Для большего количества информации сходите сюда: <a href="http://www.filesender.org/" target="_blank">www.filesender.org</a></p>
