al=1;
al2=1;
al3=1;

        

function alerta()
{
    if(al){
        document.getElementById('p1').innerHTML="Lo mas recomendado es refrescar la pagina de su perfil, otra opcion es cerrar el sitio y volver a abrirlo; otra posibilidad se puede dar por incompatibilidad entre los formatos que soporta";
        document.getElementById('p1-1').innerHTML=" la pagina y la que usted gusta. Si este articulo no le fue util, contactese con los desarrolladores a traves de la pestaña 'contactanos'.";
        al=0;
    }
    else{
        document.getElementById('p1').innerHTML="";
        document.getElementById('p1-1').innerHTML="";
        al=1;
    }
}

function alerta2()
{
    if(al2){
        document.getElementById('p2').innerHTML="La mejor opcion es refrescar la pagina del feed, otra opcion es cerrar el sitio y volver a abrirlo; si dichas opciones puede que el servidor se ";
        document.getElementById('p2-1').innerHTML=" encuentre en mantenimiento (por unas cuantas horas nada mas). Si el problema persiste, contactese con un administrador.";
        al2=0;
    }
    else{
        document.getElementById('p2').innerHTML="";
        document.getElementById('p2-1').innerHTML="";
        al2=1;
    }
}

function alerta3()
{
    if(al3){
        document.getElementById('p3').innerHTML="En aquel particular caso, se le recomnienda reiniciar la pagina o verificar que el link no tenga alguna modificacion (podria estar sufriendo un ataque).";
        document.getElementById('p3-1').innerHTML=" Puede darse el caso de que el servidor haya caido y este en reparaciones, pero si este imprevisto persiste, contactese con los desarrolladores a traves de la pestaña 'contactanos'.";
        al3=0;
    }
    else{
        document.getElementById('p3').innerHTML="";
        document.getElementById('p3-1').innerHTML="";
        al3=1;
    }
}

oscuro = 0;

function modoOscuro(){
    fondo = document.getElementById('fondo');
    Elnacho = document.getElementById('Elnacho');
    h1 = document.getElementById('h1');
    h2 = document.getElementById('h2');
    h22 = document.getElementById('h2-2');
    h23 = document.getElementById('h2-3');
    p = document.getElementById('p1');
    p2 = document.getElementById('p2');
    p3 = document.getElementById('p3');
    p1 = document.getElementById('p1-1');
    p22 = document.getElementById('p2-1');
    p33 = document.getElementById('p3-1');
    if(oscuro){
        fondo.style.backgroundColor = ('white');
        Elnacho.style.backgroundColor = ('#6b73c1');
        h1.style.color = ('black');
        oscuro=0;
    }else{
        fondo.style.backgroundColor = ('black');
        Elnacho.style.backgroundColor = ('#4E2B4F');
        h1.style.color = ('white');
        oscuro=1;
    }
}

function caracteres(){
    alert('Tu contraseña debe ser de maximo 12 caracteres');
 }