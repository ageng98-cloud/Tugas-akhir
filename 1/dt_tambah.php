				<thead>
					<tr>	
						<th>NIP</th>
						<th>Akses</th>
						<th>Nama guru</th>
						<th>Password</th>
						<th>Pendidikan terakhir</th>
						<th>Alamat</th>	
						<th>Nomor HP</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querysiswa = mysqli_query ($konek, "SELECT guru_bk.NIP,usergroup.nama_usergroup,guru_bk.Nama_guru
						,guru_bk.Password,guru_bk.Pendidikan_terakhir,guru_bk.Alamat,guru_bk.Nomor_hp FROM guru_bk JOIN usergroup ON guru_bk.id_usergroup = usergroup.id_usergroup ");
						if($querysiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($siswa = mysqli_fetch_array ($querysiswa)){
							
							echo "
								<tr>
									<td>$siswa[NIP]</td>
									<td>$siswa[nama_usergroup]</td>
									<td>$siswa[Nama_guru]</td>
									<td>$siswa[Password]</td>
									<td>$siswa[Pendidikan_terakhir]</td>
									<td>$siswa[Alamat]</td>
									<td>$siswa[Nomor_hp]</td>
									<td>
									    <a href='user_edit1.php?id=$siswa[NIP]'>Edit</a>|
										<a href='#' onClick='confirm_delete(\"tambah_delete.php?NIP=$siswa[NIP]\")'>Delete</a>
										
									</td>
								</tr>";
						}
					?>
				</tbody>
				
				
				