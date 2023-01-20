$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "/get-status-pesanan",
        dataType: "json",
        success: function (response) {

            if (response.status == 'OK') {
                let allPesanan = response.data.pesanan;
                let allStatusPesanan = response.data.statusPesanan;

                for (let i = 0; i < allPesanan.length; i++) {

                    for (let j = 0; j < allStatusPesanan.length; j++) {
                        if (allStatusPesanan[j]['id_pesananan'] == allPesanan[i]['id'] &&
                            allStatusPesanan[j]['level'] == 'Kepala Tambang') {
                            
                                switch (allStatusPesanan[j]['status']) {
                                    case 'menunggu':
                                        $(`#lv-1-card-${i}`).html(`
                                            <h6 class="fw-bold">Kepala Tambang</h6>
                                            <span class="fw-bold color-primary">
                                                <i class="fas fa-pause-circle fa-3x"></i>
                                                <br>
                                                Menunggu
                                            </span>
                                        `);
                                        break;
                                    case 'disetujui':
                                        $(`#lv-1-card-${i}`).html(`
                                            <h6 class="fw-bold">Kepala Tambang</h6>
                                            <span class="fw-bold color-success">
                                                <i class="fas fa-check-double fa-3x"></i>
                                                <br>
                                                Disetujui
                                            </span>
                                        `);
                                        break;
                                    case 'ditolak':
                                        $(`#lv-1-card-${i}`).html(`
                                            <h6 class="fw-bold">Kepala Tambang</h6>
                                            <span class="fw-bold color-danger">
                                                <i class="fas fa-times-circle fa-3x"></i>
                                                <br>
                                                Ditolak
                                            </span>
                                        `);
                                        break;
                                }
                        }

                        if (allStatusPesanan[j]['id_pesananan'] == allPesanan[i]['id'] &&
                            allStatusPesanan[j]['level'] == 'Kepala Pool') {
                            
                                switch (allStatusPesanan[j]['status']) {
                                    case 'menunggu':
                                        $(`#lv-2-card-${i}`).html(`
                                            <h6 class="fw-bold">Kepala Tambang</h6>
                                            <span class="fw-bold color-primary">
                                                <i class="fas fa-pause-circle fa-3x"></i>
                                                <br>
                                                Menunggu
                                            </span>
                                        `);
                                        break;
                                    case 'disetujui':
                                        $(`#lv-2-card-${i}`).html(`
                                            <h6 class="fw-bold">Kepala Tambang</h6>
                                            <span class="fw-bold color-success">
                                                <i class="fas fa-check-double fa-3x"></i>
                                                <br>
                                                Disetujui
                                            </span>
                                        `);
                                        break;
                                    case 'ditolak':
                                        $(`#lv-2-card-${i}`).html(`
                                            <h6 class="fw-bold">Kepala Tambang</h6>
                                            <span class="fw-bold color-danger">
                                                <i class="fas fa-times-circle fa-3x"></i>
                                                <br>
                                                Ditolak
                                            </span>
                                        `);
                                        break;
                                }
                        }
                    }
                }
            }
        }
    });
});