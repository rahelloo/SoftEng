<!DOCTYPE html>
<html lang="en">
  <head>
    @include('home.donasicss')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donasi</title>
    {{-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="donasi.css" /> --}}
  </head>
  <body>
    <style>
        :root {
          --primary: #664c25;
          --bg: #efe5d8;
          --bgc: #DEC493;
          }

          .active
          {
            font-weight: bold!important;
          }
    </style>
    <!-- Spinner and Navbar start -->
    @include('master.navbar')
    <!-- Spinner and Navbar end -->

    <!-- Navbar End -->


    @include('home.donasiheader')

    <main class="container my-5">
        <div class="row">
          <div class="col-md-12 mb-4">
            <section id="donation-form">
              <h2 class="mb-4">Donasi Disini</h2>
              <form id="form">
                <div class="form-group">
                  <label for="sender-name">Nama Pengirim:</label>
                  <input type="text" class="form-control" id="sender-name" name="sender-name" required>
                </div>
                <div class="form-group">
                  <label for="receiver-name">Nama penerima:</label>
                  <input type="text" class="form-control" id="receiver-name" name="receiver-name" required>
                </div>
                <div class="form-group">
                  <label for="receiver-address">Alamat tujuan:</label>
                  <textarea class="form-control" id="receiver-address" name="receiver-address" rows="3" required></textarea>
                </div>
                <div class="form-group">
                  <label for="products">Produk yang akan dikirim:</label>
                  <div id="product-list">
                    <div class="product-item mb-2">
                      <div class="input-group">
                        <input type="text" class="form-control" name="product-name" placeholder="Nama Produk" required>
                        <input type="number" class="form-control" name="product-quantity" placeholder="Kuantitas" required>
                        <div class="input-group-append">
                          <button type="button" class="btn btn-danger remove-product">Hapus</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-primary mt-2" id="add-product" style="background-color: #DEC493!important">Tambahkan Produk Lain</button>
                </div>
            </br></br>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="expiry-date">Tanggal Kadaluarsa:</label>
                    <input type="date" class="form-control" id="expiry-date" name="expiry-date" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="delivery-date">Tanggal transaksi:</label>
                    <input type="date" class="form-control" id="delivery-date" name="delivery-date" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="message">Pesan:</label>
                  <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </br>
                </div>

                <button type="submit" class="btn btn-success btn-block">Donasi</button>
              </form>
            </section>
          </div>
          <div class="col-md-12">
            <section id="donation-list">
              <h2 class="mb-4">Riwayat Donasi</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Pengirim</th>
                      <th>Penerima</th>
                      <th>Alamat</th>
                      <th>Produk</th>
                      <th>Kadaluarsa</th>
                      <th>Transaksi</th>
                      <th>Pesan</th>
                    </tr>
                  </thead>
                  <tbody id="donations">
                    <!-- Data donasi dapat dimasukkan di sini -->
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
      </main>



    <!-- QRIS Modal -->
    <div
      class="modal fade"
      id="qrisModal"
      tabindex="-1"
      aria-labelledby="qrisModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="qrisModalLabel">
              Selesaikan Donasi Anda
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <p>Scan QR code dibawah untuk menyelesaikan transaksi:</p>
            <img src="img/qris-example.png" alt="QRIS Code" class="img-fluid" />
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              rungkan
            </button>
            <button type="button" class="btn btn-success" id="confirmPayment">
              Pembayaran Berhasil
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Start -->
    @include('./master.footer')
    <!-- Footer End -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/donasi.js"></script>
  </body>
</html>
