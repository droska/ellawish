//services transition

/*Servicio 1*/
document.getElementsByClassName('item1')[0].addEventListener("click", function () {
  document.getElementsByClassName('services_1')[0].style.left = '0';
});
document.getElementsByClassName('cuadrado')[0].addEventListener("click", function () {
  document.getElementsByClassName('services_1')[0].style.left = '-100%';
})
/*Servicio 4 */
document.getElementsByClassName('item4')[0].addEventListener("click", function () {
  document.getElementsByClassName('services_4')[0].style.left = '0';
});
document.getElementsByClassName('cuadrado4')[0].addEventListener("click", function () {
  document.getElementsByClassName('services_4')[0].style.left = '100%';
})