let ngepel = document.getElementById('ngepel');
let manusia = document.getElementById('manusia');

window.addEventListener('scroll', function(){
    let value = this.window.scrollY;

    manusia.style.left = value * .6 + 'px';
    ngepel.style.right = value * .3 + 'px';
})

//layer-4
document.getElementById("btn-1").onclick = function() {
    document.getElementById("menu-1").src = "image/pizza.png";
    document.getElementById("menu-1").style.transition = "1s";
    }
    document.getElementById("menu-1").onclick = function() {
        document.getElementById("menu-1").src = "image/saji-tertutup.png";
    }

    document.getElementById("btn-2").onclick = function() {
        document.getElementById("menu-2").src = "image/kentang.png";
        document.getElementById("menu-2").style.transition = "1s";
    }
    document.getElementById("menu-2").onclick = function() {
        document.getElementById("menu-2").src = "image/saji-tertutup.png";
    }

    document.getElementById("btn-3").onclick = function() {
        document.getElementById("menu-3").src = "image/ayam-bakar.png";
        document.getElementById("menu-2").style.transition = "1s";
    }
    document.getElementById("menu-3").onclick = function() {
        document.getElementById("menu-3").src = "image/saji-tertutup.png";
    }

    document.getElementById("btn-4").onclick = function() {
        document.getElementById("menu-4").src = "image/mie.png";
        document.getElementById("menu-2").style.transition = "1s";
    }
    document.getElementById("menu-4").onclick = function() {
        document.getElementById("menu-4").src = "image/saji-tertutup.png";
    }

    document.getElementById("menu-5").onclick = function() {
        document.getElementById("menu-5").src = "image/pizza.png";
        document.getElementById("menu-5").style.transition = "1s";
    }
    document.getElementById("menu-5").onclick = function() {
        document.getElementById("menu-5").src = "image/saji-tertutup.png";
    }

    document.getElementById("btn-6").onclick = function() {
        document.getElementById("menu-6").src = "image/kentang.png";
        document.getElementById("menu-6").style.transition = "1s";
    }
    document.getElementById("menu-6").onclick = function() {
        document.getElementById("menu-6").src = "image/saji-tertutup.png";
    }

    document.getElementById("btn-7").onclick = function() {
        document.getElementById("menu-7").src = "image/ayam-bakar.png";
        document.getElementById("menu-7").style.transition = "1s";
    }
    document.getElementById("menu-7").onclick = function() {
        document.getElementById("menu-7").src = "image/saji-tertutup.png";
    }

    document.getElementById("btn-8").onclick = function() {
        document.getElementById("menu-8").src = "image/mie.png";
        document.getElementById("menu-8").style.transition = "1s";
    }
    document.getElementById("menu-8").onclick = function() {
        document.getElementById("menu-8").src = "image/saji-tertutup.png";
    }
    
    /*document.getElementById("simpan").onclick = function() {
        alert("pesanan anda sedang diproses")
    }*/

    function submit() {

        var id =document.getElementById('input-id').value;
        var nama =document.getElementById('input-nama').value;
        var alamat =document.getElementById('input-alamat').value;
        var tlp =document.getElementById('input-tlp').value;
        var jenis =document.getElementById('input-jenis').value;
    
        alert( "ID : " + id + "\nNAMA : " + nama + "\nALAMAT : " + alamat + "\nNO TELEPON : " + tlp + "\nJENIS PEMBAYARAN : " + jenis)
    }