console.log(jQuery().jquery);

$(document).on('click', '#burger', function () {
 $('.nav-menu').toggleClass('active');
});

$('#subscription_form').on('submit', function (e) {
 e.preventDefault();
 var $form = $(this);
 $.ajax({
 type: 'POST',
 url: './subscription_ajax.php',
 data: $form.serialize()
 }).done(function () {
 $form[0].reset();
 alert('Дякуємо за підписку!');
 }).fail(function () {
 alert('Сталася помилка');
 });
});