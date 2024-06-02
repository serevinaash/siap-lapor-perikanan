    <!-- START: ASIDE MENU -->
    <section class="">
      <div class="border-t border-b border-gray-200 py-12 mt-16 px-4">
        <div class="flex justify-center mb-8">
          <img
            src="{{url("/frontend/images/content/logo.png")}}"
            alt="Luxspace | Fulfill your house with beautiful furniture"
          />
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            var canvasElement = document.getElementById('kategoriIkanChart');
            console.log(canvasElement);  // Debugging: pastikan elemen canvas ditemukan

            if (canvasElement) {  // Pastikan elemen canvas ditemukan
                var ctx = canvasElement.getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: {!! json_encode($categories) !!},
                        datasets: [{
                            label: 'Kategori Ikan',
                            data: {!! json_encode($values) !!},
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Kategori Ikan'
                            }
                        }
                    }
                });
            }
        });
    </script>
    </section>
  