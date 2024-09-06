<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <link rel="stylesheet" href="../style/income.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="upper">
        <a href="../profil.php" class="icon-link">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 12l14 0" />
                <path d="M5 12l6 6" />
                <path d="M5 12l6 -6" />
            </svg>
        </a>
        <span class="nav-item" style="margin-left: 20px; text-align: center;">
            Penghasilan
        </span>
    </div>

    <div class="eventwrap">
        <div class="events">
            <a href="pemasukan.php" class="event-box">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="34"  height="34"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-tablet-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.5 21h-6.5a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8" /><path d="M16 19h6" /><path d="M19 16v6" /><path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" /></svg>
                <div class="pagewrap"> 
                    <div class="title">Tambah Pemasukan</div>
                </div>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#b54078"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14zm8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" /></svg>
            </a>
        </div>
        <div class="events">
            <a href="pengeluaran.php" class="event-box">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="34"  height="34"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-tablet-minus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.5 21h-6.5a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v11" /><path d="M12.872 16.51a1 1 0 1 0 -.872 1.49" /><path d="M16 19h6" /></svg>
                <div class="pagewrap"> 
                    <div class="title">Tambah Pengeluaran</div>
                </div>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#b54078"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14zm8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" /></svg>
            </a>
        </div>

    </div>

    <div class="title2">Riwayat Pendapatan Terakhir</div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Pendapatan</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Pendapatan">Pengeluaran</td>
                    <td data-label="Total">Rp.800.000</td>
                    <td data-label="Tanggal">02-01-2024</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pemasukan</td>
                    <td data-label="Total">Rp.1.350.000</td>
                    <td data-label="Tanggal">11-12-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pemasukan</td>
                    <td data-label="Total">Rp.2.000.000</td>
                    <td data-label="Tanggal">30-10-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pemasukan</td>
                    <td data-label="Total">Rp.1.000.000</td>
                    <td data-label="Tanggal">01-10-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pengeluaran</td>
                    <td data-label="Total">Rp.2.500.000</td>
                    <td data-label="Tanggal">21-08-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pemasukan</td>
                    <td data-label="Total">Rp.1.800.000</td>
                    <td data-label="Tanggal">17-03-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pemasukan</td>
                    <td data-label="Total">Rp.2.000.000</td>
                    <td data-label="Tanggal">30-10-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pemasukan</td>
                    <td data-label="Total">Rp.1.000.000</td>
                    <td data-label="Tanggal">01-10-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pengeluaran</td>
                    <td data-label="Total">Rp.2.500.000</td>
                    <td data-label="Tanggal">21-08-2023</td>
                </tr>
                <tr>
                    <td data-label="Pendapatan">Pemasukan</td>
                    <td data-label="Total">Rp.1.800.000</td>
                    <td data-label="Tanggal">17-03-2023</td>
                </tr>
            </tbody>
        </table>
    </div>



</body>
</html>

    