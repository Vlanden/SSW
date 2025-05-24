al=1;
al2=1;
al3=1;
oscuro1 = 1;
oscuro2 = 1;

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
        

        function modoOscuro2(){

            F=document.getElementById('fondo');
            M=document.getElementById('m');
            T=document.getElementById('h2');
            P1=document.getElementById('p1');
            P11=document.getElementById('p1-1');
            P2=document.getElementById('p2');
            P21=document.getElementById('p2-1');
            P3=document.getElementById('p3');
            P31=document.getElementById('p3-1');
            H=document.getElementById('hr1');

            if(oscuro2){
                F.style.backgroundColor = ('#4E2B4F');
                M.style.backgroundColor = ('#4E2B4F');
                M.style.color = ("whitesmoke");
                oscuro2=0;
            }
            else{
                F.style.backgroundColor = ('#4E2B4F');
                M.style.backgroundColor = ("whitesmoke");
                M.style.color = ("#000032");
                oscuro2=1;
            }
        }

        //oscuro1 = 1;

function modoOscuro1(){
    M=document.getElementById('m');
    M.classList.toggle("oscuro");
    /*F=document.getElementById('fondo');
    M=document.getElementById('m');
    T=document.getElementById('h1');
    H=document.getElementById('hr1');
    R=document.getElementById('b');
    S=document.getElementById('e');
    D1=document.getElementById('c');
    D2=document.getElementById('p');
    L=document.getElementById('l');
    L2=document.getElementById('l2');

        if(oscuro1){
            M.style.backgroundColor = ('#6b73c1');
            T.style.color = ("whitesmoke");
            L.style.color = ("whitesmoke");
            L2.style.color = ("whitesmoke");
            D1.style.color = ("whitesmoke");
            D1.placeholder.style.color = ("whitesmoke");
            D2.style.color = ("whitesmoke");
            D2.placeholder.style.color = ("whitesmoke");
            H.style.backgroundColor = ('whitesmoke');
            R.style.color = ("whitesmoke");
            S.style.color = ("whitesmoke");
            oscuro1=0;
        }
        else{
            M.style.backgroundColor = ("whitesmoke");
            M.style.color = ("#000032");
            T.style.color = ("#000032");
            L.style.color = ("#000032");
            T.style.color = ("#000032");
            L2.style.color = ("#000032");
            D1.style.color = ("#000032");
            D1.placeholder.style.color = ("000032");
            D2.style.color = ("#000032");
            R.style.color = ("#000032");
            S.style.color = ("#000032");
            D2.placeholder.style.color = ("#000032");
            H.style.backgroundColor = ('#6b73c1');
            oscuro1=1;
        }*/
    }

function caracteres(){
   alert('Tu contraseña debe ser de maximo 12 caracteres');
}
