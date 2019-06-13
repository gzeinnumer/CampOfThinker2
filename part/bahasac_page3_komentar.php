				<div class="komentar">
					<p id="komentaropen"> (1) Komentar</p>
                    <table id="tablekomentara" cellpadding="0" cellspacing="3" align="center" border="0">
					  <?php do { ?>
                        <tr>
                            <th align="left" rowspan="2" id="user">
                                <img src="../img/user picture.jpg" id="userpic"/>
                            </th>
                            <th id="tnamap" colspan="2" align="left">
                                <?php echo $row_bahasac_page3['nama']; ?>
                            </th>
                        </tr>
                        <tr>
                            <td id="temailp" >
                                <?php echo $row_bahasac_page3['email']; ?> / <?php echo $row_bahasac_page3['website']; ?>
                            </td>
                            <td id="ttglp" align="right">
                                <?php echo date("d-m-y",$row_bahasac_page3['tanggal']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td id="tkomentarp" colspan="3">
                                <?php echo $row_bahasac_page3['komentar']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td id="pemisahkomentar" nowrap  border="0">&nbsp;</td>
                        </tr>
                        <?php } while ($row_bahasac_page3 = mysql_fetch_assoc($bahasac_page3)); ?>
                    </table>
            	</div>
                <div class="komentar">
                    <p id="komentarclose"> Tinggalkan Komentar</p>
                        <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
                            <table id="tengahkomentar1">
                                <tr id="pemisahinsert" border="2">
                                    <td id="tnamai" align="left">
                                        <input type="text" name="nama" value="" size="100" placeholder="Nama. . .">
                                    </td>
                                </tr>
                                <tr border="2">
                                    <td id="temaili">
                                        <input type="text" name="email" value="" size="100" placeholder="Email. . .">
                                    </td>
                                </tr>
                                <tr borde="2">
                                    <td id="tkomentari">
                                        <textarea font-face="tahoma" type="text" name="komentar" value="" cols="75" rows="5" placeholder="Komentar Kamu. . ."></textarea>
                                    </td>
                                </tr>
                                <tr border="2">
                                    <td id="temaili">
                                        <input type="text" name="website" value="" size="100" placeholder="Website Kamu. . .">
                                    </td>
                                </tr>
                                <tr >
                                    <td>
                                        <input type="hidden" name="tanggal" value="<?php echo time();?>">
                                    </td>
                                </tr>
                                <tr align="center" >
                                    <td id="tomblokirim">
                                        <input type="submit" value="Send">
                                    </td>
                                </tr>
                          </table>
          					<input type="hidden" name="no" value="">
         				 	<input type="hidden" name="MM_insert" value="form1">
                        </form>
                </div>