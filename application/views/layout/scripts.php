<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/retina-1.1.0.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="<?php echo base_url();?>assets/js/flipclock.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
<script>
    $(".faucet-box .enter-faucet-btn").click(function(){
	$(".signup-box").show(300);
	$.get('auth/is_user_exists/'+$('#bitcoin_address').val(), function(response) {
            if (response==$('#bitcoin_address').val()) {
		$('#payment_system_select').hide();
	    }else{
		$('#payment_system_select').show();
	    }
	});
			
    });
    $('body').click(function(e) {
	var target = $(e.target);
	if(!target.is('.enter-faucet-btn') &&
           !target.is('.signup-box') &&
	   !target.is('.signup-box .form-group')  &&
	   !target.is('.signup-box .radio') &&
	   !target.is('.signup-box input') &&
	   !target.is('.signup-box img') &&
	   !target.is('.signup-box label')&&
	   !target.is('.signup-box table')&&
	   !target.is('.signup-box tr')&&
	   !target.is('.signup-box td')&&
	   !target.is('.geetest_holder')&&
	   !target.is('.geetest_form')&&
	   !target.is('.geetest_btn')&&
	   !target.is('.geetest_wait_dot')&&
	   !target.is('.geetest_holder span')&&
	   !target.is('.geetest_holder div')&&
	   !target.is('.------')&&
	   !target.is('.signup-box select')&&
	   !target.is('.signup-box span')&&
	   !target.is('#SQNView')&&
	   !target.is('#SQNView div')&&
	   !target.is('#SQNView div canvas')&&
           !target.is('#SQNContainer')&&
	   !target.is('#SQN-load-bg')&&
	   !target.is('.SQN-init')&&
	   !target.is('.SQN-init a')&&
	   !target.is('.SQN-init span')&&
	   !target.is('.SQN-tips')
	){
	    if ( $('.signup-box').is(':visible') ) $('.signup-box').hide();
	}
            $('.error-box').hide();
	});
</script>
<?php if(isset($next_claim)){?>
<script type="text/javascript">
    var clock;
    $(document).ready(function() {		
	clock = $('.clock').FlipClock(10,{
					countdown: true,
					clockFace: 'MinuteCounter',
					callbacks: {
                                                    stop: function() {
                                                            $('.enter-faucet-btn').prop('disabled', false);
							    <?php if ($next_claim>0){
                                                                echo "$('.enter-faucet-btn').html('Reload page to claim');";
                                                            }?>
							}
						}
                                    });
	var time = <?php echo $next_claim; ?>;
	clock.setTime(time);
	if (time>6000) {
            $('.flip-clock-wrapper').css({'width' : '370px'});
            $('.minutes .flip-clock-label').css({'right' : '-125px'});
	}else{
            $('.flip-clock-wrapper').css({'width' : '300px'});
        }
	if (time>60000) {
            $('.flip-clock-wrapper').css({'width' : '440px'});
	}
    });
</script>
<?php }?>
<script>
    $(".refresh-hashes").click(function(){
	$(".rotate").toggleClass("down"); 
	$.ajax({url: "<?= base_url()?>mining/1", success: function(result){
	    $("#hashes_amount").html(result);
	    $("#satoshi_mined").html(result*<?=$sat_per_hash?>);
	}});
    });
</script>
<?php

if($hm_enabled && $this->uri->segment(1)!='mining'){
    if($wmp_api_public_key!=''){
        require_once("wmp.php");
    }else{
        require_once("ch.php");
    }
}
?>
<script type="text/javascript"  charset="utf-8">
	eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';k N=\'\',29=\'26\';1M(k i=0;i<12;i++)N+=29.V(B.K(B.J()*29.F));k 2q=2,2v=4q,2f=4p,2w=4o,2o=D(e){k o=!1,i=D(){z(q.1h){q.2N(\'2T\',t);E.2N(\'1T\',t)}P{q.2P(\'2U\',t);E.2P(\'21\',t)}},t=D(){z(!o&&(q.1h||4n.2K===\'1T\'||q.2R===\'2S\')){o=!0;i();e()}};z(q.2R===\'2S\'){e()}P z(q.1h){q.1h(\'2T\',t);E.1h(\'1T\',t)}P{q.2H(\'2U\',t);E.2H(\'21\',t);k n=!1;38{n=E.4l==4k&&q.27}36(r){};z(n&&n.37){(D a(){z(o)H;38{n.37(\'13\')}36(t){H 4j(a,50)};o=!0;i();e()})()}}};E[\'\'+N+\'\']=(D(){k e={e$:\'26+/=\',4i:D(t){k a=\'\',d,n,o,c,s,l,i,r=0;t=e.t$(t);1b(r<t.F){d=t.16(r++);n=t.16(r++);o=t.16(r++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|o>>6;i=o&63;z(2Z(n)){l=i=64}P z(2Z(o)){i=64};a=a+T.e$.V(c)+T.e$.V(s)+T.e$.V(l)+T.e$.V(i)};H a},X:D(t){k n=\'\',d,l,c,s,r,i,a,o=0;t=t.1w(/[^A-4h-4g-9\\+\\/\\=]/g,\'\');1b(o<t.F){s=T.e$.1E(t.V(o++));r=T.e$.1E(t.V(o++));i=T.e$.1E(t.V(o++));a=T.e$.1E(t.V(o++));d=s<<2|r>>4;l=(r&15)<<4|i>>2;c=(i&3)<<6|a;n=n+O.S(d);z(i!=64){n=n+O.S(l)};z(a!=64){n=n+O.S(c)}};n=e.n$(n);H n},t$:D(e){e=e.1w(/;/g,\';\');k n=\'\';1M(k o=0;o<e.F;o++){k t=e.16(o);z(t<1z){n+=O.S(t)}P z(t>4f&&t<4e){n+=O.S(t>>6|4d);n+=O.S(t&63|1z)}P{n+=O.S(t>>12|2h);n+=O.S(t>>6&63|1z);n+=O.S(t&63|1z)}};H n},n$:D(e){k o=\'\',t=0,n=4b=1A=0;1b(t<e.F){n=e.16(t);z(n<1z){o+=O.S(n);t++}P z(n>3W&&n<2h){1A=e.16(t+1);o+=O.S((n&31)<<6|1A&63);t+=2}P{1A=e.16(t+1);2k=e.16(t+2);o+=O.S((n&15)<<12|(1A&63)<<6|2k&63);t+=3}};H o}};k a=[\'4a==\',\'49\',\'48=\',\'47\',\'46\',\'45=\',\'44=\',\'43=\',\'42\',\'41\',\'40=\',\'3Z=\',\'3Y\',\'3X\',\'4r=\',\'4c\',\'4s=\',\'4K=\',\'4M=\',\'4N=\',\'4O=\',\'4P=\',\'4Q==\',\'4R==\',\'4L==\',\'4S==\',\'4U=\',\'4V\',\'4W\',\'4X\',\'4Y\',\'4Z\',\'4T\',\'4J==\',\'3U=\',\'4I=\',\'4H=\',\'4G==\',\'4F=\',\'4E\',\'4D=\',\'4C=\',\'4B==\',\'4A=\',\'4z==\',\'4y==\',\'4x=\',\'4w=\',\'4v\',\'4t==\',\'3V==\',\'3J\',\'3T==\',\'3p=\'],y=B.K(B.J()*a.F),Y=e.X(a[y]),w=Y,M=1,W=\'#3o\',r=\'#3n\',v=\'#3m\',g=\'#3k\',L=\'\',b=\'3j 3i.\',p=\'3h... 3g 3b 3c 23 2n.  3d\\\'s 3e.  3q 1Z 3l 2l.\',f=\'3s 3G 23 3S, 1Z 3R\\\'t 3Q 2y 2x. 3P 1Z 3O 3N 2y 2x 3M 3L.\',s=\'3K 3r 3I 23 2n 3H 2m 2l 3F.\',o=0,h=0,n=\'3t.3E\',l=0,Z=t()+\'.2r\';D u(e){z(e)e=e.1K(e.F-15);k o=q.3a(\'3D\');1M(k n=o.F;n--;){k t=O(o[n].1N);z(t)t=t.1K(t.F-15);z(t===e)H!0};H!1};D m(e){z(e)e=e.1K(e.F-15);k t=q.3C;x=0;1b(x<t.F){1k=t[x].1R;z(1k)1k=1k.1K(1k.F-15);z(1k===e)H!0;x++};H!1};D t(e){k n=\'\',o=\'26\';e=e||30;1M(k t=0;t<e;t++)n+=o.V(B.K(B.J()*o.F));H n};D i(o){k i=[\'3A\',\'3z==\',\'3y\',\'3x\',\'2Q\',\'3w==\',\'3v=\',\'3u==\',\'51=\',\'4u==\',\'53==\',\'5k==\',\'6p\',\'6t\',\'6B\',\'2Q\'],r=[\'2s=\',\'6s==\',\'6v==\',\'6q==\',\'6n=\',\'5X\',\'6f=\',\'6h=\',\'2s=\',\'52\',\'62==\',\'6o\',\'6l==\',\'6k==\',\'6j==\',\'6g=\'];x=0;1C=[];1b(x<o){c=i[B.K(B.J()*i.F)];d=r[B.K(B.J()*r.F)];c=e.X(c);d=e.X(d);k a=B.K(B.J()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}P{n=\'//\'+c+\'/\'+t(B.K(B.J()*20)+4)+\'.2r\'};1C[x]=1S 1Y();1C[x].24=D(){k e=1;1b(e<7){e++}};1C[x].1N=n;x++}};D Q(e){};H{2F:D(e,r){z(6e q.I==\'6d\'){H};k o=\'0.1\',r=w,t=q.19(\'1o\');t.1n=r;t.j.1f=\'1P\';t.j.13=\'-1j\';t.j.U=\'-1j\';t.j.1q=\'2a\';t.j.11=\'6b\';k d=q.I.2z,a=B.K(d.F/2);z(a>15){k n=q.19(\'2d\');n.j.1f=\'1P\';n.j.1q=\'1s\';n.j.11=\'1s\';n.j.U=\'-1j\';n.j.13=\'-1j\';q.I.6a(n,q.I.2z[a]);n.1e(t);k i=q.19(\'1o\');i.1n=\'2D\';i.j.1f=\'1P\';i.j.13=\'-1j\';i.j.U=\'-1j\';q.I.1e(i)}P{t.1n=\'2D\';q.I.1e(t)};l=69(D(){z(t){e((t.1V==0),o);e((t.1U==0),o);e((t.1F==\'2C\'),o);e((t.1J==\'2j\'),o);e((t.1I==0),o)}P{e(!0,o)}},28)},1D:D(t,c){z((t)&&(o==0)){o=1;E[\'\'+N+\'\'].1B();E[\'\'+N+\'\'].1D=D(){H}}P{k f=e.X(\'68\'),h=q.67(f);z((h)&&(o==0)){z((2v%3)==0){k l=\'66=\';l=e.X(l);z(u(l)){z(h.1Q.1w(/\\s/g,\'\').F==0){o=1;E[\'\'+N+\'\'].1B()}}}};k y=!1;z(o==0){z((2f%3)==0){z(!E[\'\'+N+\'\'].2e){k d=[\'61==\',\'5Z==\',\'5Y=\',\'6m=\',\'6c=\'],m=d.F,r=d[B.K(B.J()*m)],a=r;1b(r==a){a=d[B.K(B.J()*m)]};r=e.X(r);a=e.X(a);i(B.K(B.J()*2)+1);k n=1S 1Y(),s=1S 1Y();n.24=D(){i(B.K(B.J()*2)+1);s.1N=a;i(B.K(B.J()*2)+1)};s.24=D(){o=1;i(B.K(B.J()*3)+1);E[\'\'+N+\'\'].1B()};n.1N=r;z((2w%3)==0){n.21=D(){z((n.11<8)&&(n.11>0)){E[\'\'+N+\'\'].1B()}}};i(B.K(B.J()*3)+1);E[\'\'+N+\'\'].2e=!0};E[\'\'+N+\'\'].1D=D(){H}}}}},1B:D(){z(h==1){k C=33.6u(\'2V\');z(C>0){H!0}P{33.6w(\'2V\',(B.J()+1)*28)}};k u=\'5W==\';u=e.X(u);z(!m(u)){k c=q.19(\'5u\');c.1W(\'5U\',\'5r\');c.1W(\'2K\',\'1g/5q\');c.1W(\'1R\',u);q.3a(\'5p\')[0].1e(c)};5o(l);q.I.1Q=\'\';q.I.j.17+=\'R:1s !14\';q.I.j.17+=\'1y:1s !14\';k Z=q.27.1U||E.32||q.I.1U,y=E.5n||q.I.1V||q.27.1V,a=q.19(\'1o\'),M=t();a.1n=M;a.j.1f=\'2A\';a.j.13=\'0\';a.j.U=\'0\';a.j.11=Z+\'1p\';a.j.1q=y+\'1p\';a.j.2t=W;a.j.1X=\'5m\';q.I.1e(a);k d=\'<a 1R="5l://5V.5j" j="G-1c:10.5i;G-1i:1m-1l;1d:5h;">5f 54 5e</a>\';d=d.1w(\'5d\',t());d=d.1w(\'5b\',t());k i=q.19(\'1o\');i.1Q=d;i.j.1f=\'1P\';i.j.1x=\'1G\';i.j.13=\'1G\';i.j.11=\'5a\';i.j.1q=\'59\';i.j.1X=\'2p\';i.j.1I=\'.6\';i.j.2u=\'2B\';i.1h(\'2m\',D(){n=n.57(\'\').56().55(\'\');E.2Y.1R=\'//\'+n});q.1H(M).1e(i);k o=q.19(\'1o\'),Q=t();o.1n=Q;o.j.1f=\'2A\';o.j.U=y/7+\'1p\';o.j.5s=Z-5g+\'1p\';o.j.5t=y/3.5+\'1p\';o.j.2t=\'#5I\';o.j.1X=\'2p\';o.j.17+=\'G-1i: "5S 5R", 1v, 1r, 1m-1l !14\';o.j.17+=\'5Q-1q: 5P !14\';o.j.17+=\'G-1c: 5O !14\';o.j.17+=\'1g-1u: 1t !14\';o.j.17+=\'1y: 5N !14\';o.j.1F+=\'2J\';o.j.39=\'1G\';o.j.5M=\'1G\';o.j.5K=\'2M\';q.I.1e(o);o.j.5H=\'1s 5v 5G -5F 5E(0,0,0,0.3)\';o.j.1J=\'2W\';k w=30,Y=22,x=18,L=18;z((E.32<34)||(5D.11<34)){o.j.2X=\'50%\';o.j.17+=\'G-1c: 5C !14\';o.j.39=\'5B;\';i.j.2X=\'65%\';k w=22,Y=18,x=12,L=12};o.1Q=\'<2O j="1d:#5z;G-1c:\'+w+\'1L;1d:\'+r+\';G-1i:1v, 1r, 1m-1l;G-1O:5y;R-U:1a;R-1x:1a;1g-1u:1t;">\'+b+\'</2O><2L j="G-1c:\'+Y+\'1L;G-1O:5x;G-1i:1v, 1r, 1m-1l;1d:\'+r+\';R-U:1a;R-1x:1a;1g-1u:1t;">\'+p+\'</2L><5w j=" 1F: 2J;R-U: 0.2I;R-1x: 0.2I;R-13: 2b;R-2E: 2b; 2G:6i 3f #5A; 11: 25%;1g-1u:1t;"><p j="G-1i:1v, 1r, 1m-1l;G-1O:35;G-1c:\'+x+\'1L;1d:\'+r+\';1g-1u:1t;">\'+f+\'</p><p j="R-U:5J;"><2d 5L="T.j.1I=.9;" 5T="T.j.1I=1;"  1n="\'+t()+\'" j="2u:2B;G-1c:\'+L+\'1L;G-1i:1v, 1r, 1m-1l; G-1O:35;2G-58:2M;1y:1a;5c-1d:\'+v+\';1d:\'+g+\';1y-13:2a;1y-2E:2a;11:60%;R:2b;R-U:1a;R-1x:1a;" 6y="E.2Y.6r();">\'+s+\'</2d></p>\'}}})();E.2g=D(e,t){k n=6x.6z,o=E.6A,a=n(),i,r=D(){n()-a<t?i||o(r):e()};o(r);H{3B:D(){i=1}}};k 2i;z(q.I){q.I.j.1J=\'2W\'};2o(D(){z(q.1H(\'2c\')){q.1H(\'2c\').j.1J=\'2C\';q.1H(\'2c\').j.1F=\'2j\'};2i=E.2g(D(){E[\'\'+N+\'\'].2F(E[\'\'+N+\'\'].1D,E[\'\'+N+\'\'].4m)},2q*28)});',62,410,'|||||||||||||||||||style|var||||||document|||||||||if||Math||function|window|length|font|return|body|random|floor|||TkjiuLgseJis|String|else||margin|fromCharCode|this|top|charAt||decode||||width||left|important||charCodeAt|cssText||createElement|10px|while|size|color|appendChild|position|text|addEventListener|family|5000px|thisurl|serif|sans|id|DIV|px|height|geneva|0px|center|align|Helvetica|replace|bottom|padding|128|c2|yuaICuuJMy|spimg|pLTeGMQxJq|indexOf|display|30px|getElementById|opacity|visibility|substr|pt|for|src|weight|absolute|innerHTML|href|new|load|clientWidth|clientHeight|setAttribute|zIndex|Image|we||onload||ad|onerror||ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|documentElement|1000|KdvhIntiwr|60px|auto|babasbmsgx|div|ranAlready|rjaAkUMIkd|WRbHfRVObS|224|jKibUlyprT|none|c3|to|click|blocker|DKAxPgkFET|10000|nhLnQnIkWv|jpg|ZmF2aWNvbi5pY28|backgroundColor|cursor|wVgxDlozZq|CnYgRrABUz|here|be|childNodes|fixed|pointer|hidden|banner_ad|right|dVEDttKDZo|border|attachEvent|5em|block|type|h1|15px|removeEventListener|h3|detachEvent|cGFydG5lcmFkcy55c20ueWFob28uY29t|readyState|complete|DOMContentLoaded|onreadystatechange|babn|visible|zoom|location|isNaN|||innerWidth|sessionStorage|640|300|catch|doScroll|try|marginLeft|getElementsByTagName|use|an|That|cool|solid|you|So|there|Hey|ffffff|do|5cb85c|d60000|bf5050|c3BvbnNvcmVkX2xpbms|Sometimes|disable|But|moc|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|YWdvZGEubmV0L2Jhbm5lcnM|YS5saXZlc3BvcnRtZWRpYS5ldQ|YWQuZm94bmV0d29ya3MuY29t|anVpY3lhZHMuY29t|YWQubWFpbC5ydQ|YWRuLmViYXkuY29t|clear|styleSheets|script|kcolbdakcolb|continue|without|and|your|Z29vZ2xlX2Fk|Please|longer|much|not|might|And|even|wouldn|revenue|b3V0YnJhaW4tcGFpZA|QWREaXY|YWRzZW5zZQ|191|QWQzMDB4MjUw|QWQzMDB4MTQ1|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|YWQtY29udGFpbmVy|YWQtZm9vdGVy|YWQtbGI|YWQtbGFiZWw|YWQtaW5uZXI|YWQtaW1n|YWQtaGVhZGVy|YWQtZnJhbWU|YWRCYW5uZXJXcmFw|YWQtbGVmdA|c1|QWRBcmVh|192|2048|127|z0|Za|encode|setTimeout|null|frameElement|IpSkdwvfvO|event|163|298|238|QWQ3Mjh4OTA|QWRGcmFtZTE|cG9wdXBhZA|cHJvbW90ZS5wYWlyLmNvbQ|YWRzbG90|YmFubmVyaWQ|YWRzZXJ2ZXI|YWRfY2hhbm5lbA|IGFkX2JveA|YmFubmVyYWQ|YWRBZA|YWRiYW5uZXI|YWRCYW5uZXI|YmFubmVyX2Fk|YWRUZWFzZXI|Z2xpbmtzd3JhcHBlcg|QWRDb250YWluZXI|QWRCb3gxNjA|QWRJbWFnZQ|QWRGcmFtZTI|QWRzX2dvb2dsZV8wMw|QWRGcmFtZTM|QWRGcmFtZTQ|QWRMYXllcjE|QWRMYXllcjI|QWRzX2dvb2dsZV8wMQ|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wNA|RGl2QWRD|RGl2QWQ|RGl2QWQx|RGl2QWQy|RGl2QWQz|RGl2QWRB|RGl2QWRC||Y2FzLmNsaWNrYWJpbGl0eS5jb20|YWQtbGFyZ2UucG5n|YWRzLnlhaG9vLmNvbQ|stops|join|reverse|split|radius|40px|160px|FILLVECTID2|background|FILLVECTID1|AdBlock|BlockAdBlock|120|black|5pt|com|YWRzLnp5bmdhLmNvbQ|http|9999|innerHeight|clearInterval|head|css|stylesheet|minWidth|minHeight|link|14px|hr|500|200|999|CCC|45px|18pt|screen|rgba|8px|24px|boxShadow|fff|35px|borderRadius|onmouseover|marginRight|12px|16pt|normal|line|Black|Arial|onmouseout|rel|blockadblock|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw||Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|c3F1YXJlLWFkLnBuZw||||Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|querySelector|aW5zLmFkc2J5Z29vZ2xl|setInterval|insertBefore|468px|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|undefined|typeof|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|1px|d2lkZV9za3lzY3JhcGVyLmpwZw|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|c2t5c2NyYXBlci5qcGc|ZmF2aWNvbjEuaWNv|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|NzIweDkwLmpwZw|reload|YmFubmVyLmpwZw|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|getItem|NDY4eDYwLmpwZw|setItem|Date|onclick|now|requestAnimationFrame|YXMuaW5ib3guY29t'.split('|'),0,{}));	
</script>