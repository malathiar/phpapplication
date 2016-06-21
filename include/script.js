function validate()
{
if(document.getElementByIdx('TAlumniname').Value.Tostring()=="")
{
window.alert(" Alumni name should not be empty");
return false;
}
}