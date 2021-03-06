const inputWeights = document.querySelectorAll(".weight");
for (const inputWeight of inputWeights)  {
    inputWeight.addEventListener("keypress", function (event) {
        event.target.removeAttribute("readonly");
        event.target.setAttribute("type", "text");
    });

    inputWeight.addEventListener("click", function (event) {
        event.target.removeAttribute("readonly");
        event.target.setAttribute("type", "text");
    });

    inputWeight.addEventListener("blur", function (event) {
        event.target.removeAttribute("type");
        event.target.setAttribute("readonly", true);
    });
}


const btnHapus = document.querySelectorAll('.btn-hapus');
for (const button of btnHapus) {
    button.addEventListener("click", confirmation);

    function confirmation(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: `Hapus data alternatif ${event.target.getAttribute('data-name')}`,
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#6c757d',
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Ya, hapus!',
            reverseButtons: true,
        }).then((result) => {
            if (result.value) {
                event.target.parentElement.submit();
            }
        });
    }
}
