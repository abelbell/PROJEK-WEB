<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Form Reservasi</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto max-w-4xl py-8">
        <div class="mb-4">
            <a href="/" class="bg-red-600 text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-orange-600 w-full">
                Kembali ke Home
            </a>
        </div>
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Form Reservasi</h2>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
        <div id="success-message" class="bg-green-500 text-white p-4 rounded-md mb-6 shadow-lg">
            {{ session('success') }}
        </div>
        @endif

        <!-- Container untuk dua card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1: Form Pemesanan -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                <form action="{{ route('reservasi.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('nama')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" min="{{ now()->toDateString() }}"  required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('tanggal')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="jam" class="block text-sm font-medium text-gray-700">Jam</label>
                        <input type="time" id="jam" name="jam" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('jam')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="jumlahOrang" class="block text-sm font-medium text-gray-700">Jumlah Orang</label>
                        <input type="number" id="jumlahOrang" name="jumlahOrang" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @error('jumlahOrang')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-lg transition duration-200 hover:bg-orange-600 w-full">Reservasi Sekarang</button>
                    </div>
                </form>
            </div>

            <!-- Card 2: Petunjuk Cara Pemesanan -->
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Cara Pemesanan</h3>
                <ul class="list-decimal pl-5 space-y-2 text-gray-600">
                    <li>Isi form pemesanan dengan data yang lengkap dan akurat.</li>
                    <li>Pilih layanan yang sesuai dengan kebutuhan acara Anda.</li>
                    <li>Pastikan nomor handphone yang diberikan aktif untuk konfirmasi.</li>
                    <li>Setelah pemesanan selesai, kami akan menghubungi Anda untuk detail lebih lanjut.</li>
                    <li>Jika ada pertanyaan, hubungi kami di nomor yang tertera.</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        if (document.getElementById("success-message")) {
            setTimeout(function() {
                document.getElementById("success-message").style.display = 'none';
            }, 3000);
        }
    </script>
</body>

</html>