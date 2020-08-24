var yesCheck = document.getElementById('ya');
const noCheck = document.getElementById('tidak');

function check() {
    if (yesCheck.checked) {
        // MEMUNCULKAN FORM INPUT SAAT KONDISI CHECKBOX YA
        document.getElementById('univ').style.display = 'block';
        document.getElementById('jenjang').style.display = 'block';

        // MEN-DISABLED BUTTON TIDAK SAAT PILIH YA
        noCheck.disabled = 'disabled';

    }else{
        
        // MENGHIDE FORM INPUT SAAT KONDISI CHECKBOX TIDAK
        document.getElementById('univ').style.display = 'none';
        document.getElementById('jenjang').style.display = 'none';
        
        if (noCheck.checked == true) {
            yesCheck.disabled = 'disabled';
        }else{
            yesCheck.disabled = false;
        }

        // UN-DISABLED CHECKBOX TIDAK SAAT KONDISI BELUM KLIK CHECKBOX APAPUN
        noCheck.disabled = false;
    }
}