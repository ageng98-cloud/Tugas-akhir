				<thead>
					<tr>
					   <th >ID</th>
						<th>NIS siswa</th>
						<th>Nama siswa</th>
						<th>kelas</th>
						<th>Tanggal</th>
						<th>Nama Pelanggaran</th>
						<th>point</th>
						<th>Keterangan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querypelanggaran = mysqli_query ($konek, "SELECT pelanggaran_siswa.Id_pelanggaran_siswa, pelanggaran_siswa.NIS_siswa,siswa.Nama_siswa,kelas.Nama_kelas, pelanggaran_siswa.Tanggal_pelanggaran_siswa, pelanggaran.Nama_pelanggaran,pelanggaran.Point,pelanggaran_siswa.Keterangan
				FROM pelanggaran_siswa JOIN pelanggaran ON pelanggaran.Kode_pelanggaran = pelanggaran_siswa.Kode_pelanggaran JOIN siswa ON siswa.NIS_siswa = pelanggaran_siswa.NIS_siswa JOIN kelas ON siswa.Kode_kelas = kelas.Kode_kelas ORDER BY pelanggaran_siswa.Tanggal_pelanggaran_siswa ASC ");
						if($querypelanggaran == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($pelanggaran = mysqli_fetch_array ($querypelanggaran)){
							  ?>
								<tr>
								     <td><?php echo "$pelanggaran[Id_pelanggaran_siswa]"?></td>
									<td><?php echo "$pelanggaran[NIS_siswa]"?></td>
									<td><?php echo "$pelanggaran[Nama_siswa]"?></td>
									<td><?php echo "$pelanggaran[Nama_kelas]"?></td>
									<td><?php $ttt = $pelanggaran['Tanggal_pelanggaran_siswa']; echo date("d-m-Y", strtotime($ttt))?></td>
									<td><?php echo "$pelanggaran[Nama_pelanggaran]"?></td>
									<td><?php echo "$pelanggaran[Point]"?></td>
									<td><?php echo "$pelanggaran[Keterangan]"?></td>
									<td>
									<?php echo "
										<a href='point_modal_edit.php?id=$pelanggaran[Id_pelanggaran_siswa]'>Edit</a> |
								       <a href='#' onClick='confirm_delete(\"point_delete.php?Id_pelanggaran_siswa=$pelanggaran[Id_pelanggaran_siswa]\")'>Delete</a>  
									"?>
									</td>
								</tr>
								
								<?php
								}
								?>
				</tbody>
				
				
				
			
				
				
				
				