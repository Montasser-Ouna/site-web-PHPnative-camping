function test(){
    var login = f.user.value;
    var title = f.title.value;
    var contents = f.contents.value;

    if( login.length === 0)
    {
        alert("Le nom d'utilisateur ne peut pas etre vide");
    }
    if( v.length === 0)
    {
        alert("Le titre du post ne peut pas etre vide");
    }
    if( contents.length === 0)
    {
        alert("Le contenu de votre post ne peut pas etre vide");
    }


}