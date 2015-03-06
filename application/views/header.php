<header>
	
	<div class="logo">
		<a href="/">HTML ebay</a>
	</div>
	
	<ul class="top_nav">

		<li><a href="/labs">Mis plantillas</a></li>
		<li class="green"><?=  anchor('app/html', 'Crear plantilla', '') ?></li>

		<!--<li class="multi">
			<a href="javascript:void(0);">Share</a>

			<ul class="share_box dropdown" style="top: 44px; opacity: 0; display: none;">
				<!--<li>
					<label for="share_url">Link</label>
					<input type="url" id="share_url"
					value="http://cssdeck.com/labs/large-pressable-css3-navigation" onclick="this.select();">
				</li>
				<li>
					<label for="share_full_url">Full Screen Result</label>
					<input type="url" onclick="this.select();" value="http://cssdeck.com/labs/full/large-pressable-css3-navigation" id="share_full_url">
				</li>
				<li>
					<label for="embed_url">Embed on your webpage (blogs, articles, etc.)</label>
					<input type="url" onclick="this.select();" value="&lt;pre class=&quot;_cssdeck_embed&quot; data-pane=&quot;output&quot; data-user=&quot;devilsbackyard&quot; data-href=&quot;large-pressable-css3-navigation&quot; data-version=&quot;0&quot;&gt;&lt;/pre&gt;&lt;script async src=&quot;http://cssdeck.com/assets/js/embed.js&quot;&gt;&lt;/script&gt;" id="embed_url">
				</li>
								<li class="share-links">
					<a target="_blank" href="http://twitter.com/share?text=Large+Pressable+CSS3+Navigation&amp;via=cssdeck">
						<i class="icon-twitter-sign"></i>
					</a>
					|
					<a target="_blank" href="http://facebook.com/share.php?s=100&amp;p[title]=Large+Pressable+CSS3+Navigation&amp;p[url]=http://cssdeck.com/labs/large-pressable-css3-navigation">
						<i class="icon-facebook-sign"></i>
					</a>
					|
					<a target="_blank" href="https://plus.google.com/share?url=http://cssdeck.com/labs/large-pressable-css3-navigation">
						<i class="icon-google-plus-sign"></i>
					</a>
				</li>
			</ul>
		</li>-->
		
	</ul>

	<ul class="extra">
		<!-- Nav -->
		
		<?php if ($this->uri->segment(2) == 'html'): ?>
			
			<li><?=  anchor('login/logout', '<i class="fa fa-floppy-o"></i>','title="Guardar" class="icons"') ?></li>
			
			<li><?=  anchor('login/logout', '<i class="fa fa-paste"></i>','title="Guardar como" class="icons"') ?></li>
			
			<li><?=  anchor('login/logout', '<i class="fa fa-paint-brush"></i>','title="Estilo" class="icons"') ?></li>
			
			<li><?=  anchor('login/logout', '<i class="fa fa-eraser"></i>','title="Limpiar" class="icons"') ?></li>
		
		<?php endif ?>

		<li><?=  anchor('login/logout', '<i class="fa fa-power-off"></i>','title="Cerrar sesión" class="icons"') ?></li>
		
	</ul>

	
</header>
