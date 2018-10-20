<?php
// Inicializando variavel i
$i = 1;
$count = 1;
// Muda as Cores das tuplas
$classCss = NULL;
// Pega o Style do char
$numeroDaClass = NULL;
// Recebe os poderes das Guilds Para mudar a Imagem no site
$maestria = NULL;

function defineClass ($classe) {
	
	switch ($classe) {
		case 1:
			return '<span class="icon warrior"></span>';
			break;
		case 2:
			return '<span class="icon blader"></span>';
			break;
		case 3:
			return '<span class="icon wizard"></span>';
			break;
		case 4:
			return '<span class="icon farcher"></span>';
			break;
		case 5:
			return '<span class="icon fshielder"></span>';
			break;
		case 6:
			return '<span class="icon fblader"></span>';
			break;
		default:
			return '<span class=" "></span>';
	}
	
}

function definePoderGuild ($powerGuild) {
	
	if ($powerGuild < 15000) :
		return '<span class="pm1 m1"></span>';
	 elseif ($powerGuild >= 15000 && $powerGuild <= 35000) :
		return '<span class="pm2 m2"></span>';
	 elseif ($powerGuild >= 35000 && $powerGuild <= 80000) :
		return '<span class="pm3 m3"></span>';
	 elseif ($powerGuild >= 80000 && $powerGuild <= 180000) :
		return '<span class="pm4 m4"></span>';
	 elseif ($powerGuild >= 180000 && $powerGuild <= 350000) :
		return '<span class="pm5 m5"></span>';
	 elseif ($powerGuild >= 350000 && $powerGuild <= 530000) :
		return '<span class="pm6 m6"></span>';
	 elseif ($powerGuild >=530000):
		return '<span class="pm7 m7"></span>';
	endif;
	
}

function defineMaestria ($expRank) {
	
	return $maestria = definePoderGuild($expRank);
	
}

?>
	
<div class="table_wrap table2">
	<table class="tb_char7">
		<thead>
			<tr>
				<th scope="col" class="tb_rank ">Posi&ccedil;&atilde;o</th>
				<th scope="col" class="tb_point ">Pontos</th>
				<th scope="col" class="tb_name ">Nome da Guild</th>
				<th scope="col" class="tb_level ">Level Guild</th>
				<th scope="col" class="tb_mastery_guild">Maestria G.</th>
				<th scope="col" class="tb_name ">Poder da Guild</th>
				<th scope="col" class="tb_level ">Level Master</th>
				<th scope="col" class="tb_guild ">Nome do Master</th>
				<th scope="col" class="tb_class">Classe</th>
			</tr>
		</thead>
		<tbody>
<?php
foreach ($guild as $g) :
	
	if ($i % 2 == 0) {
		$classCss = "even";
	} else {
		$classCss = " ";
	}
	$numeroDaClass = ($g->Style / pow(2, 0) & (pow(2, 3) - 1));
	$iconeClass = defineClass($numeroDaClass);
	
	?>
			
			<tr class="<?php echo $classCss;?>"
				ng-repeat="row in (pagination.pageIndex == 1 ? datas.rows.slice(3, 20) : datas.rows)">
				<td class="tb_rank">
					<div>
						<span class="ranking ng-binding"><?php echo $i++;?></span>
						<!-- <span
							class="vary decrease">2</span> -->
					</div>
				</td>

				<td class="tb_point"><span class="elps ng-binding"><?php echo $g->Point;?></span>
				</td>
				
				<td class="tb_name"><span class="elps" title="<?php echo $g->GuildName?>"> <a
						ng-click="selectCharacter(row.server_no, row.character_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->GuildName;?></a>
				</span></td>

				<td class="tb_level"><span class="elps ng-binding"><?php echo $g->Level;?></span>
				</td>
				
				<td class="tb_mastery_guild tb_last_guild">
					<?php echo defineMaestria($g->ExpRank);?>
				</td>

				<td class="tb_name"><span class="elps" title="<?php echo $g->ExpRank?>"> <a
						ng-click="selectCharacter(row.server_no, row.character_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->ExpRank;?></a>
				</span></td>

				<td class="tb_level"><span class="elps ng-binding"><?php echo $g->LEV;?>
					</span></td>

				<td class="tb_guild"><span class="elps"> <a
						ng-click="selectGuild(row.server_no, row.guild_name, row.nation_code)"
						style="text-decoration: none; cursor: pointer;" class="ng-binding">
						<?php echo $g->GuildMaster?>
						</a>
				</span></td>

				<td class="tb_class tb_last">
					<?php echo $iconeClass;?>
				</td>
			</tr>
		<?php endforeach;?>

		</tbody>
	</table>
</div>
	