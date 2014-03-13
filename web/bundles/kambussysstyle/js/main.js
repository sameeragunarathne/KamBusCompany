/*$('#button-login').click(function() {
	$("#operator-username").val("");
	$("#operator-password").val("");
});*/

$('.modal').on('show.bs.modal', function (e) {
	$(this).find('input').val("");
})