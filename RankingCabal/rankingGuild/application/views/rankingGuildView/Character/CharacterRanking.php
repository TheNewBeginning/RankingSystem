<div class="container ng-scope">
	<div class="content_header">
		<div class="header_left">
			<h2 class="ng-binding">Character Ranking</h2>
		</div>
	</div>
	<div class="content_wrap">
		<div class="table_wrap table2">
			<table class="tb_char7">
				<thead>
					<tr>
						<th scope="col" class="tb_rank ng-binding">Rank</th>
						<th scope="col" class="tb_point ng-binding">Pontos de Honra</th>
						<th scope="col" class="tb_name ng-binding">Personagem</th>
						<th scope="col" class="tb_level ng-binding">Nv</th>
						<th scope="col" class="tb_guild ng-binding">Guilda</th>
						<th scope="col" class="tb_class">
							<div class="select battleClassSelector">
								<a href="" class="default">
									<span class="ng-binding">Estilo de Batalha</span>
								</a>
								<div class="option">
									<ul>
										<li><a href="" ng-click="battleClassUpdate(1)">Warrior</a></li>
										<li><a href="" ng-click="battleClassUpdate(2)">Blader</a></li>
										<li><a href="" ng-click="battleClassUpdate(3)">Wizard</a></li>
										<li><a href="" ng-click="battleClassUpdate(4)">Force Archer</a></li>
										<li><a href="" ng-click="battleClassUpdate(5)">Force Shielder</a></li>
										<li><a href="" ng-click="battleClassUpdate(6)">Force Blader</a></li>
										<li><a href="" ng-click="battleClassUpdate(7)">Gladiator</a></li>
										<li><a href="" ng-click="battleClassUpdate(0)">Force Gunner</a></li>
									</ul>
								</div>
							</div></th>
							<th scope="col">Nação</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tr_top3 " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">1</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">216,319</span></td>
							<td class="tb_name"><span class="elps" title="TOXlC"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">TOXlC</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="BloodFalls"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">BloodFalls</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="tr_top3 " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">2</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">168,238</span></td>
							<td class="tb_name"><span class="elps" title="mayke18"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">mayke18</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="TheShininG"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">TheShininG</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="tr_top3 " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">3</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">157,337</span></td>
							<td class="tb_name"><span class="elps" title="Peeved"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">Peeved</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="OVER9000"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">OVER9000</a></span></td>
							<td class="tb_class"><span class="icon gladiator"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">4</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">147,054</span></td>
							<td class="tb_name"><span class="elps" title="IKauai"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">IKauai</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="ReclameAQU1"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">ReclameAQU1</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">5</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">132,246</span></td>
							<td class="tb_name"><span class="elps" title="MetalGirl"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">MetalGirl</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="Breaker"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">Breaker</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">6</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">126,390</span></td>
							<td class="tb_name"><span class="elps" title="lMyLord"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">lMyLord</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="BloodFalls"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">BloodFalls</a></span></td>
							<td class="tb_class"><span class="icon fshielder"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">7</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">125,685</span></td>
							<td class="tb_name"><span class="elps" title="iSKUERTOW"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">iSKUERTOW</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="STOP"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">STOP</a></span></td>
							<td class="tb_class"><span class="icon wizard"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">8</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">125,260</span></td>
							<td class="tb_name"><span class="elps" title="TMusic"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">TMusic</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="BloodFalls"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">BloodFalls</a></span></td>
							<td class="tb_class"><span class="icon wizard"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">9</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">122,497</span></td>
							<td class="tb_name"><span class="elps" title="SuperShox"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">SuperShox</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="STOP"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">STOP</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">10</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">118,481</span></td>
							<td class="tb_name"><span class="elps" title="Ak0nXD"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">Ak0nXD</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="EterNusXD"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">EterNusXD</a></span></td>
							<td class="tb_class"><span class="icon fblader"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">11</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">112,881</span></td>
							<td class="tb_name"><span class="elps" title="IArkanisI"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">IArkanisI</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="EterNusXD"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">EterNusXD</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">12</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">112,318</span></td>
							<td class="tb_name"><span class="elps" title="InFurius"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">InFurius</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="STOP"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">STOP</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">13</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">111,041</span></td>
							<td class="tb_name"><span class="elps" title="iPuFF"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">iPuFF</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="EterNusXD"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">EterNusXD</a></span></td>
							<td class="tb_class"><span class="icon fshielder"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">14</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">109,204</span></td>
							<td class="tb_name"><span class="elps" title="AyshaSeven"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">AyshaSeven</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="STOP"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">STOP</a></span></td>
							<td class="tb_class"><span class="icon fblader"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">15</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">108,500</span></td>
							<td class="tb_name"><span class="elps" title="TioShark"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">TioShark</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.16</span></td>
							<td class="tb_guild"><span class="elps" title=""><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">-</a></span></td>
							<td class="tb_class"><span class="icon warrior"></span></td>
							<td class="tb_nation tb_last"><span class="icon neutrality"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">16</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">103,736</span></td>
							<td class="tb_name"><span class="elps" title="lLegnar"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">lLegnar</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="DIVINOS"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">DIVINOS</a></span></td>
							<td class="tb_class"><span class="icon gladiator"></span></td>
							<td class="tb_nation tb_last"><span class="icon procyon"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">17</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">101,849</span></td>
							<td class="tb_name"><span class="elps" title="Jimmy7"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">Jimmy7</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.1</span></td>
							<td class="tb_guild"><span class="elps" title=""><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">-</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon neutrality"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">18</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">100,760</span></td>
							<td class="tb_name"><span class="elps" title="ArminXD"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">ArminXD</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="BloodRoyalS"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">BloodRoyalS</a></span></td>
							<td class="tb_class"><span class="icon wizard"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class=" " ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">19</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">100,501</span></td>
							<td class="tb_name"><span class="elps" title="MatteKS"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">MatteKS</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title="BloodFalls"><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">BloodFalls</a></span></td>
							<td class="tb_class"><span class="icon warrior"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows --><tr class="even tr_20" ng-repeat="row in datas.rows">
							<td class="tb_rank">
								<span class="ranking ng-binding">20</span>
								<span class="vary nochange">0</span>
							</td>
							<td class="tb_point"><span class="elps ng-binding">99,349</span></td>
							<td class="tb_name"><span class="elps" title="lArkanisl"><a ng-click="selectCharacter(row.server_no, row.character_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">lArkanisl</a></span></td>
							<td class="tb_level"><span class="elps ng-binding">Lv.200</span></td>
							<td class="tb_guild"><span class="elps" title=""><a ng-click="selectGuild(row.server_no, row.guild_name)" style="text-decoration: none;cursor:pointer;" class="ng-binding">-</a></span></td>
							<td class="tb_class"><span class="icon blader"></span></td>
							<td class="tb_nation tb_last"><span class="icon capella"></span></td>
						</tr><!-- end ngRepeat: row in datas.rows -->
					</tbody>
				</table>
			</div>
		</div>
		<div class="table_pager ng-scope">
			<span class="num">
				<a href="" ng-click="move(1)" class="on">1</a>
				<a href="" ng-click="move(2)">2</a>
				<a href="" ng-click="move(3)">3</a>
				<a href="" ng-click="move(4)">4</a>
				<a href="" ng-click="move(5)">5</a>
				<a href="" ng-click="move(6)">6</a>
				<a href="" ng-click="move(7)">7</a>
				<a href="" ng-click="move(8)">8</a>
				<a href="" ng-click="move(9)">9</a>
				<a href="" ng-click="move(10)">10</a>
			</span>
			<a href="" class="move next" ng-click="move(11)">
				<span class="blind">Next</span>
			</a>
			<a href="" class="move last" ng-click="move(6388)">
				<span class="blind">Last</span>
			</a>
		</div>
	</div>