</fieldset>
    <legend>Cetak Data Pelanggaran</legend>
 <form id="fftgpelanggaran" method="POST" action="lap-pelanggaran.php">
   <table cellpadding="5">
          <tr>
             <td>Dari</td>
             <td>:</td>
             <td><input type="date" name="Dari" required oninvalid="this.setCustomValidity('harus memilih tanggal')" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
         <tr>
             <td>Sampai</td>
             <td>:</td>
             <td><input type="date" name="Sampai" required oninvalid="this.setCustomValidity('harus memilih tanggal')" data-options="formatter:myformatter,parser:myparser" style="width:200px;height:25px"></td>
         </tr>
         <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
<td><input type="submit" name="Submit"  value="Cetak" style="width:100px;height:30px">
<input  type="reset" name="reset" value="Reset" style="width:100px;height:30px" "></td>
        </tr>
        </table>
     </form>
</fieldset>