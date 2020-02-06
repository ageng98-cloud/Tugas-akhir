				<thead>
					<tr>	
						<th>NIS siswa</th>
						<th>Nama siswa</th>
						<th>kelas</th>	
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					    $NIP=$_SESSION['NIP'];
						$querysiswa = mysqli_query ($konek, "SELECT siswa.NIS_siswa,siswa.Nama_siswa,kelas.Nama_kelas  FROM siswa JOIN kelas ON siswa.Kode_kelas = kelas.Kode_kelas  where siswa.NIP=$NIP ORDER BY siswa.Kode_kelas asc");
						if($querysiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($siswa = mysqli_fetch_array ($querysiswa)){
							
							echo "
								<tr>
									<td>$siswa[NIS_siswa]</td>
									<td>$siswa[Nama_siswa]</td>
									<td>$siswa[Nama_kelas]</td>
									<td>
										<a href='siswa_modal_edit.php?id=$siswa[NIS_siswa]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"siswa_delete.php?NIS_siswa=$siswa[NIS_siswa]\")'>Delete</a>|
										<a href='profil.php?id=$siswa[NIS_siswa]' target='blank'>Profil lengkap</a> |
										<a href='total_point.php?id=$siswa[NIS_siswa]' target='blank'>Pelanggaran</a> 
										
									</td>
								</tr>";
						}
					?>
				</tbody>
				
				
				