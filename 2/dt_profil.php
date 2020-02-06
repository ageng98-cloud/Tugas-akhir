			
				<tbody>
				
					<?php
					    $NIS_siswa= $_GET['id'];
						$querysiswa = mysqli_query ($konek, "SELECT siswa.NIS_siswa,siswa.Nama_siswa,siswa.Semester,siswa.Tahun_ajaran,jurusan.Nama_jurusan,kelas.Nama_kelas,siswa.Alamat_siswa,siswa.No_hp_siswa,siswa.Nama_wali_siswa,siswa.No_hp_wali_siswa,siswa.photo  FROM siswa JOIN jurusan ON siswa.Kode_jurusan = jurusan.Kode_jurusan JOIN kelas ON siswa.Kode_kelas = kelas.Kode_kelas  WHERE siswa.NIS_siswa= $NIS_siswa; ");
						if($querysiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($siswa = mysqli_fetch_array ($querysiswa)){
							
							echo "
							
									<tr>
								    <img src='../aset/akskdjadsfklasdf/$siswa[photo]' height='250' width='200'>
									</tr>
									<td>
										<h4><a href='foto_modal_edit.php?id=$siswa[NIS_siswa]'>Ganti Foto</a></h4> 
									</td>
									<tr>
									<td>NIS siswa </td><td>:</td>
									<td>$siswa[NIS_siswa]<td>
									</tr>
									<tr>
									<td>Nama siswa </td><td>:</td>
									<td>$siswa[Nama_siswa]</td>
									</tr>
									<tr>
									<td>Semester </td><td>:</td>
									<td>$siswa[Semester]</td>
									</tr>
									<tr>
									<td>Tahun ajaran </td><td>:</td>
									<td>$siswa[Tahun_ajaran]</td>
									</tr>
									<tr>
									<td>Jurusan </td><td>:</td>
									<td>$siswa[Nama_jurusan]</td>
									</tr>
									<tr>
									<td>kelas</td><td>:</td>
									<td>$siswa[Nama_kelas]</td>
									</tr>
									<tr>
									<td>Alamat siswa</td><td>:</td>
									<td>$siswa[Alamat_siswa]</td>
									</tr>
									<tr>
									<td>No HP siswa </td><td>:</td>
									<td>$siswa[No_hp_siswa]</td>
									</tr>
									<tr>
									<td>Nama wali siswa</td><td>:</td>
									<td>$siswa[Nama_wali_siswa]</td>
									</tr>
									<tr>
									<td>No HP wali siswa </td><td>:</td>
									<td>$siswa[No_hp_wali_siswa]</td>
									</tr>
								";
						}
					?>
				</tbody>
				
				
				