<script type="text/javascript" src="of.js"></script>
<form name="orokbefogad_reg" method="POST" onsubmit="ellenoriz()" action="/include/of_feldolgoz.php">
        <div class="box">
          <table>
            <tr>
              <td>
                <table>
                  <tr>
                    <td>Örökbefogadó neve</td>
                  </tr>
                  <tr>
                    <td><input type="text" id="orokbefogado_neve" min="3" max=50 name="orokbefogado_neve" size="30" required></td>
                  </tr>
                  <tr>
                    <td>Örökbefogadó címe</td>
                    </tr>
                    <tr>
                    <td><input type="text" min="8" max=55 name="orokbefogado_cime" size="30" required></td>
                  </tr>
                  <tr>
                    <td>Örökbefogadó telefonszáma</td>
                    </tr>
                    <tr>
                    <td><input id="orokbefogado_telefonszama" type="number" pattern="{11}*" name="orokbefogado_telefonszama" size="30" required></td>
                  </tr>
                  <tr>
                    <td>Örökbefogadott állat neve</td>
                  </tr>
                  <tr>
                    <td><select id="orokbefogadott_allatneve" name="orokbefogadott_allatneve">
                      <option>Csizmás kandúr</option>
                      <option>Mirr Múrr</option>
                      <option>Mirtil Cica</option>
                      <option>Blöki Kutya</option>
                      <option>Bogáncs Kutya</option>
                      </select>
                    </td>
                  </tr>
<tr>
<td>Ön jön az állatért?</td>
</tr> <tr>
                    <td><select>
                      <option>IGEN</option>
                      <option>NEM</option>
                      </select>
                    </td>
                  </tr>

                </table>
                <input id="kuld" onclick="ellenoriz();" type="submit" value="Küldés">
              </td>
            </tr>
          </table>
        </div>
      </form>