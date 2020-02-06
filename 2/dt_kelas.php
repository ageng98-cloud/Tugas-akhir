				<thead>
					<tr>
					   <th>Kode kelas</th>
						<th>Kode jurusan</th>
						<th>Nama kelas</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querykelas = mysqli_query ($konek, "SELECT Kode_kelas,Kode_jurusan,Nama_kelas FROM kelas");
						if($querykelas == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($kelas = mysqli_fetch_array ($querykelas)){
							echo "
								<tr>
								     <td>$kelas[Kode_kelas]</td>
									<td>$kelas[Kode_jurusan]</td>
									<td>$kelas[Nama_kelas]</td>
									<td>
										<a href='kelas_modal_edit.php?id=$kelas[Kode_kelas]'>Edit</a> |
								       <a href='#' onClick='confirm_delete(\"kelas_delete.php?Kode_kelas=$kelas[Kode_kelas]\")'>Delete</a>  
									</td>
								</tr>";}?>
				</tbody>
				
				
				
			
				
				
				
				