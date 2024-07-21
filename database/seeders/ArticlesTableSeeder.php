<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Sample Article 1', 
                'slug'   => \Str::slug('Sample Article 1'),
                'content' => '<article>
                <p>&nbsp;</p>
                <p>REPUBLIKA.CO.ID,&nbsp;GIANYAR -- Bek<a href="https://republika.co.id/tag/bali-united"> Bali United </a>FC Andhika Wijaya berharap mendapatkan dukungan maksimal dari suporternya saat melakoni pertandingan<a href="https://republika.co.id/tag/piala-presiden"> Piala Presiden </a>2024. Serdadu Tridatu akan meladeni<a href="https://republika.co.id/tag/arema-fc"> Arema FC </a>pada laga awal Grup B di Stadion I Wayan Dipta, Gianyar, Bali, Ahad (21/7/2024) petang.</p>
                <p>"Kami sebagai pemain sudah mempersiapkan diri sebelum mengarungi Liga 1. Untuk pertandingan lawan Arema FC, pemain sudah siap. Untuk suporter, semoga datang ke stadion dan kami meraih hasil yang baik," kata Andhika dikutip dari laman resmi Piala Presiden.</p>
                <div class="picked-article">&nbsp;</div>
                <p>Bali United melakukan peremajaan tim dengan melepas sejumlah pemain dan mendatangkan penggawa baru. Namun pelatih Bali United<a href="https://republika.co.id/tag/stefano-cugurra"> Stefano Cugurra </a>menegaskan, timnya sudah siap bertanding.</p>
                <p>Ia mengakui, latihan taktikal baru berjalan beberapa hari karena lebih menekankan aspek peningkatan fisik. "Kami lebih banyak latihan fisik setelah libur panjang untuk menaikkan semua fisik pemain. Hanya tiga hari yang kami gunakan untuk latihan teknikal dan taktikal," ujar pelatih dengan sapaan akrab<a href="https://republika.co.id/tag/teco"> Teco </a>ini.</p>
                <div class="iframe-container">
                <div id="player"><iframe title="YouTube video player" src="https://www.youtube.com/embed/vcXwk9YQWaQ?si=wx0gzaB0ND4YuOMa?autoplay=0" width="100%" height="315" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe></div>
                </div>
                <!-- RECREATIVE -->
                <p>&nbsp;</p>
                <p>Meski demikian, dia optimistis kondisi timnya saat ini sudah sangat bagus. "Untuk pertandingan pertama, mudah-mudahan kami bisa menang melawan tim kuat. Mudah-mudahan suporter dapat datang memenuhi stadion juga," ujari dia.</p>
                <p>Pelatih asal Brasil ini mengisyaratkan siap menjajal semua pemain, tak terkecuali pemain baru. Menurutnya, mereka yang sudah bergabung tentu bakal diberikan kesempatan karena<a href="https://republika.co.id/tag/piala-presiden-2024"> Piala Presiden 2024 </a>merupakan ajang uji coba sebelum tampil di kompetisi Liga 1 2024/2025.</p>
                <p>"Ya semua pemain yang mengikuti latihan akan diberi kesempatan untuk bermain di Piala Presiden. Saya pikir mayoritas pemain sudah latihan sejak 2 Juli, mungkin Everton yang terakhir, tapi yang lain sudah latihan. Kalau ada kesempatan pasti saya pasang," kata Teco.</p>
                <p>Sementara pelatih Arema FC<a href="https://republika.co.id/tag/joel-cornelli"> Joel Cornelli </a>mengaky memiliki waktu yang cukup sebelum timnya terjun ke Piala Presiden 2024. Juara bertahan Piala Presiden ini telah tiga pekan menjalani latihan dan sepekan lebih pemusatan latihan di Bali.</p>
                <p>Baginya pertandingan di Piala Presiden 2024 ini sangatlah penting untuk menjadi kesempatan bagi tim berjuluk Singo Edan menunjukkan progres latihan yang telah dijalani.</p>
                <p>"Tim ini sudah siap main," kata Joel Cornelli.</p>
                <p>Menurutnya sejak pekan kemarin, Singo Edan sudah banyak melatih taktikal dan organisasi tim. Dia juga melihat performa pemain memuaskan, sehingga yakin Arema FC siap untuk laga melawan Bali United.</p>
                <p>"Bagi saya, sangat penting menghadapi tiga lawan kuat. Itu sangat penting ketika menghadapi tim yang kuat, tim Anda harus tampil baik, punya organisasi bagus dan bermain impresif," tutur pelatih asal Brasil ini.</p>
                <p>Dia juga menegaskan tiga laga di babak penyisihan ini sangat penting. Bukan hanya lawan Bali United, namun Madura United dan Persija Jakarta pula.</p>
                <p>"Penting bagi kami menghadapi tiga laga ke depan. Semoga kami bisa meraih sukses di Piala Presiden ini," tegas Joel Cornelli.</p>
                <!-- POLLING HERE --></article>',
                'tags' => 'sepak bola, olah raga',
                'image' => 'https://static.republika.co.id/uploads/images/inpicture_slide/022561600-1721522106-830-556.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Meski Top Skor Sementara Piala AFF U-19, Iqbal Gwijangge Fokus Tugas Utama Jaga Pertahanan',
                'slug' => \Str::slug('Meski Top Skor Sementara Piala AFF U-19, Iqbal Gwijangge Fokus Tugas Utama Jaga Pertahanan'),
                'content' => '<article>
                <p>&nbsp;</p>
                <p>REPUBLIKA.CO.ID,&nbsp;SURABAYA -- Sosok tak terduga muncul sebagai top skor sementara<a href="https://republika.co.id/tag/timnas-indonesia-u19"> timnas Indonesia U-19 </a>pada<a href="https://republika.co.id/tag/asean-u19-boys-championship"> ASEAN U-19 Boys Championship </a>atau<a href="https://republika.co.id/tag/piala-aff-u19"> Piala AFF U-19 </a>2024. Dia adalah pemain belakang timnas Indonesia U-19 Muhammad Iqbal Gwijangge.</p>
                <div style="width: 100%; text-align: center;">
                <div id="div-gpt-ad-1676964519200-0" style="min-width: 30px; min-height: 20px; margin: 0px auto; text-align: center; display: none;" data-google-query-id="CJKeuvfht4cDFZbpcwEd0v4Inw">
                <div id="google_ads_iframe_/12890435/republika-desktop-detail-text_0__container__" style="border: 0pt none; width: 300px; height: 0px;"></div>
                </div>
                </div>
                <p>Saat Arkhan Kaka belum mencetak gol dan Jans Raven baru sekali membobol gawang lawan, Iqbal sudah mengoleksi tiga gol dari dua laga timnas U-19. Torehan golnya sama dengan Abid Safaraz dari tim Malaysia U-19.</p>
                <div class="picked-article">&nbsp;</div>
                <p>Ia mengaku selalu ada perasaan yang mendorongnya untuk bisa mencetak gol sebelum maju saat ada situasi bola mati. Namun pada saat yang sama, ia tetap paham tugas utamanya mengawal pertahanan tim Merah-Putih.</p>
                <p>&nbsp;</p>
                <div class="iframe-container">
                <div id="player"><iframe style="border: 0px !important; width: 100% !important; height: 118px !important; margin: 0px !important; padding: 0px !important;" title="djCAsWYg9c" src="https://go.rcvlink.com/static/iframe.htm" scrolling="no" allow="autoplay" data-w="542"></iframe></div>
                </div>
                <!-- RECREATIVE -->
                <p>"Memang kadang juga ada feeling sebelum pertandingan, tapi yang pasti saya hanya melakukan tugas dan paling penting jangan sampai kebobolan," kata Iqbal saat ditemui setelah pertandingan kontra<a href="https://republika.co.id/tag/kamboja"> Kamboja </a>U-19 di Stadion Gelora Bung Tomo (GBT) Surabaya, Sabtu (20/7/2024) malam.</p>
                <p>Pesepak bola yang saat ini membela klub Liga 1 itu berkeyakinan, jika menjalankan instruksi pelatih dengan baik, maka hasil yang dicapai akan maksimal. Dalam memaksimalkan peluang dari bola mati, Iqbal juga mengaku instruksi dari tim pelatih.</p>
                <p>"Kami ada latihan set piece bersama pelatih juga, jadi memang sudah disiapkan dan ini bagian dari strategi pelatih juga," tuturnya.</p>
                <p>Meskipun ada tugas khusus saat set piece, pemain kelahiran Sumedang itu tidak pernah melupakan tugasnya menjadi tembok kokoh Indonesia bersama Kadek Arel dan Buffon.</p>
                <p>"Yang paling penting kami tetap fokus di belakang, biar tidak terjadi gol dari serangan balik Kamboja," ujarnya.</p>
                <p>Dirinya berharap dalam pertandingan Piala AFF U-19 ini bisa terus membuat clean sheet hingga menjadi juara.</p>
                <p>Soal keefektifan formasi tiga atau empat pemain belakang, Iqbal tidak mempermasalahkannya. Menurut dia, yang terpenting adalah tidak kebobolan. "Yang paling penting kami bisa bertahan dan menyerang bersama-sama," ujarnya.</p>
                <p>Pemilik nomor 21 di Timnas Indonesia U-19 itu juga bersyukur bisa menjadi pencetak gol terbanyak sementara di tim, namun tidak terlalu memikirkan status tersebut.</p>
                <p>"Yang terpenting saya masih bisa berkontribusi bagi tim dan semoga di pertandingan selanjutnya bisa lebih baik lagi dari pada hari ini," kata Iqbal.</p>
                <p>&nbsp;</p>
                <p><strong>Daftar Top Skor Sementara Piala AFF U-19 2024</strong></p>
                <p>3 Gol: Iqbal Gwijangge (Indonesia), Abid Safaraz (Malaysia)</p>
                <p>2 Gol: Arion Sulemani, Jake Najdovski, Marcus Younis (Australia), Arlyansyah Abdulmanan, Kadek Arel Priyatna (Indonesia), G. Pavithran (Malaysia), Otu Bisong (Filipina)</p>
                <p>1 Gol: Jens Raven, Garv Sahoo (Indonesia), Chheang Kimsong, Sorm Borith (Kamboja), Garv Sahoo (Singapura), Ho&agrave;ng Quang Dung (Vietnam), Phyo Pyae Sone (Myanmar), Phongsakorn Sangkasopha, Pikanet Laohawiwat (Thailand), Amir Farhan, Danish Hakimi, Haykal Danish, Izzat Syahir, Shafizan Arshad, Zamirul Hakim (Malaysia).</p>
                <!-- POLLING HERE --></article>',
                'tags' => 'sepak bola, olah raga',
                'image' => 'https://static.republika.co.id/uploads/images/inpicture_slide/022561600-1721522106-830-556.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sample Article 3', 
                'tag'   => \Str::slug('Sample Article 3'),
                'content' => 'This is the content of article 3.',
                'tags' => 'sepak bola, olah raga',
                'image' => 'https://static.republika.co.id/uploads/images/inpicture_slide/022561600-1721522106-830-556.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
