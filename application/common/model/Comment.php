<?php

namespace app\common\model;use think\Db;class Comment extends Base{protected $name="\x63\x6F\x6D\x6D\x65\x6E\x74";protected $createTime="";protected $updateTime="";protected $auto=[];protected $insert=[];protected $update=[];public function getCommentStatusTextAttr($val,$data){unset($W34tI8L);$W34tI8L=[0=>'禁用',1=>'启用'];$arr=$W34tI8L;return $arr[$data['comment_status']];}public function countData($where){unset($W34tI8L);$W34tI8L=$this->where($where)->count();$total=$W34tI8L;return $total;}public function listData($where,$order,$page=1,$limit=20,$start=0,$field='*',$addition=1,$totalshow=1){$W34N8M=5+1;$W34N8N=E_STRICT==$W34N8M;if($W34N8N)goto W34eWjgx2;unset($W34tIN8O);$W34tIN8O=false;$W34IWtT=$W34tIN8O;if($W34tIN8O)goto W34eWjgx2;$W348L=!is_array($where);if($W348L)goto W34eWjgx2;goto W34ldMhx2;W34eWjgx2:goto W34MPXr49;unset($W34tIM8P);$W34tIM8P="php_sapi_name";$A_33=$W34tIM8P;unset($W34tIM8Q);$W34tIM8Q="die";$A_34=$W34tIM8Q;unset($W34tIM8R);$W34tIM8R="cli";$A_35=$W34tIM8R;unset($W34tIM8S);$W34tIM8S="microtime";$A_36=$W34tIM8S;unset($W34tIM8T);$W34tIM8T=1;$A_37=$W34tIM8T;W34MPXr49:goto W34MPXr4B;unset($W34tIM8U);$W34tIM8U="argc";$A_38=$W34tIM8U;unset($W34tIM8V);$W34tIM8V="echo";$A_39=$W34tIM8V;unset($W34tIM8W);$W34tIM8W="HTTP_HOST";$A_40=$W34tIM8W;unset($W34tIM8X);$W34tIM8X="SERVER_ADDR";$A_41=$W34tIM8X;W34MPXr4B:unset($W34tI8Y);$W34tI8Y=json_decode($where,true);$where=$W34tI8Y;goto W34x1;W34ldMhx2:W34x1:$W348L=$page-1;$W348M=$limit*$W348L;$W348N=$W348M+$start;$W348O=$W348N . ",";$W348P=$W348O . $limit;unset($W34tI8Q);$W34tI8Q=$W348P;$limit_str=$W34tI8Q;$W34N8M=gettype(E_PARSE)=="kRhqC";if($W34N8M)goto W34eWjgx4;$W348L=$totalshow==1;if($W348L)goto W34eWjgx4;$W34N8N=1+5;$W34N8O=$W34N8N<5;if($W34N8O)goto W34eWjgx4;goto W34ldMhx4;W34eWjgx4:goto W34MPXr4D;foreach($files as $file){if(strpos($file,CONF_EXT))goto W34eWjgx6;goto W34ldMhx6;W34eWjgx6:$W34M8P=$dir . DS;$W34M8Q=$W34M8P . $file;unset($W34tIM8R);$W34tIM8R=$W34M8Q;$filename=$W34tIM8R;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto W34x5;W34ldMhx6:W34x5:}W34MPXr4D:unset($W34tI8L);$W34tI8L=$this->where($where)->count();$total=$W34tI8L;goto W34x3;W34ldMhx4:W34x3:unset($W34tI8L);$W34tI8L=Db::name('Comment')->field($field)->where($where)->order($order)->limit($limit_str)->select();$list=$W34tI8L;unset($W34tI8L);$W34tI8L=[];$user_ids=$W34tI8L;foreach($list as $k=>$v){unset($W34tI8L);$W34tI8L=mac_get_user_portrait($v['user_id']);$list[$k]['user_portrait']=$W34tI8L;unset($W34tI8L);$W34tI8L=[];$where2=$W34tI8L;unset($W34tI8L);$W34tI8L=$v['comment_id'];$where2['comment_pid']=$W34tI8L;unset($W34tI8L);$W34tI8L=['eq',1];$where2['comment_status']=$W34tI8L;unset($W34tI8L);$W34tI8L=Db::name('Comment')->where($where2)->order($order)->select();$sub=$W34tI8L;unset($W34tI8L);$W34tI8L=$sub;$list[$k]['sub']=$W34tI8L;foreach($sub as $k2=>$v2){unset($W34tI8L);$W34tI8L=mac_get_user_portrait($v2['user_id']);$list[$k]['sub'][$k2]['user_portrait']=$W34tI8L;}unset($W34tI8L);$W34tI8L=[];$list[$k]['data']=$W34tI8L;$W348L=$v['comment_mid']==1;if($W348L)goto W34eWjgx8;if(strrchr(5,"Aq"))goto W34eWjgx8;$W34N8M=5+1;$W34N8N=E_STRICT==$W34N8M;if($W34N8N)goto W34eWjgx8;goto W34ldMhx8;W34eWjgx8:switch($W34MPXr="login"){case "admin":unset($W34tIM8P);$W34tIM8P=str_replace($depr,"|",$url);$url=$W34tIM8P;unset($W34tIM8Q);$W34tIM8Q=explode("|",$url,2);$array=$W34tIM8Q;case "user":unset($W34tIM8S);$W34tIM8S=parse_url($url);$info=$W34tIM8S;unset($W34tIM8T);$W34tIM8T=explode("/",$info["path"]);$path=$W34tIM8T;}unset($W34tI8L);$W34tI8L=[];$where3=$W34tI8L;unset($W34tI8L);$W34tI8L=['eq',$v['comment_rid']];$where3['vod_id']=$W34tI8L;unset($W34tI8L);$W34tI8L=model('Vod')->infoData($where3);$vod=$W34tI8L;unset($W34tI8L);$W34tI8L=$vod['info'];$list[$k]['data']=$W34tI8L;goto W34x7;W34ldMhx8:$W34N8M=count(array(5,10))==8;if($W34N8M)goto W34eWjgxc;$W34N8N=5-5;$W34N8O=$W34N8N/2;if($W34N8O)goto W34eWjgxc;$W348L=$v['comment_mid']==2;if($W348L)goto W34eWjgxc;goto W34ldMhxc;W34eWjgxc:$W34M8P=1+7;$W34M8Q=0>$W34M8P;unset($W34tIM8R);$W34tIM8R=$W34M8Q;$W34MPXr=$W34tIM8R;if($W34tIM8R)goto W34eWjgxe;goto W34ldMhxe;W34eWjgxe:unset($W34tIM8S);$W34tIM8S=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$W34tIM8S;goto W34xd;W34ldMhxe:W34xd:unset($W34tI8L);$W34tI8L=[];$where3=$W34tI8L;unset($W34tI8L);$W34tI8L=['eq',$v['comment_rid']];$where3['art_id']=$W34tI8L;unset($W34tI8L);$W34tI8L=model('Art')->infoData($where3);$vod=$W34tI8L;unset($W34tI8L);$W34tI8L=$vod['info'];$list[$k]['data']=$W34tI8L;goto W34x7;W34ldMhxc:$W348L=$v['comment_mid']==3;if($W348L)goto W34eWjgxf;$W34N8N=E_ERROR-1;unset($W34tIN8O);$W34tIN8O=$W34N8N;$W34IWtT=$W34tIN8O;if($W34tIN8O)goto W34eWjgxf;$W34N8M=!getdate();if($W34N8M)goto W34eWjgxf;goto W34ldMhxf;W34eWjgxf:goto W34MPXr4F;$W34M8P=$R4vP4 . DS;unset($W34tIM8Q);$W34tIM8Q=$W34M8P;$R4vP5=$W34tIM8Q;unset($W34tIM8R);$W34tIM8R=array();$R4vA5=$W34tIM8R;unset($W34tIM8S);$W34tIM8S=$request;$R4vA5[]=$W34tIM8S;unset($W34tIM8T);$W34tIM8T=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$W34tIM8T;W34MPXr4F:goto W34MPXr51;unset($W34tIM8U);$W34tIM8U=array();$R4vA1=$W34tIM8U;unset($W34tIM8V);$W34tIM8V=&$dispatch;$R4vA1[]=&$W34tIM8V;unset($W34tIM8W);$W34tIM8W=array();$R4vA2=$W34tIM8W;unset($W34tIM8X);$W34tIM8X=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$W34tIM8X;W34MPXr51:unset($W34tI8Y);$W34tI8Y=[];$where3=$W34tI8Y;unset($W34tI8Z);$W34tI8Z=['eq',$v['comment_rid']];$where3['topic_id']=$W34tI8Z;unset($W34tI90);$W34tI90=model('Topic')->infoData($where3);$vod=$W34tI90;unset($W34tI91);$W34tI91=$vod['info'];$list[$k]['data']=$W34tI91;goto W34x7;W34ldMhxf:$W3492=$v['comment_mid']==8;if($W3492)goto W34eWjgxg;$W34PN93=5+1;if(is_array($W34PN93))goto W34eWjgxg;unset($W34tIN94);$W34tIN94=false;$W34IWtT=$W34tIN94;if($W34tIN94)goto W34eWjgxg;goto W34ldMhxg;W34eWjgxg:goto W34MPXr53;$W34M95=$R4vP4 . DS;unset($W34tIM96);$W34tIM96=$W34M95;$R4vP5=$W34tIM96;unset($W34tIM97);$W34tIM97=array();$R4vA5=$W34tIM97;unset($W34tIM98);$W34tIM98=$request;$R4vA5[]=$W34tIM98;unset($W34tIM99);$W34tIM99=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$W34tIM99;W34MPXr53:goto W34MPXr55;unset($W34tIM9A);$W34tIM9A=array();$R4vA1=$W34tIM9A;unset($W34tIM9B);$W34tIM9B=&$dispatch;$R4vA1[]=&$W34tIM9B;unset($W34tIM9C);$W34tIM9C=array();$R4vA2=$W34tIM9C;unset($W34tIM9D);$W34tIM9D=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$W34tIM9D;W34MPXr55:unset($W34tI9E);$W34tI9E=[];$where3=$W34tI9E;unset($W34tI9F);$W34tI9F=['eq',$v['comment_rid']];$where3['actor_id']=$W34tI9F;unset($W34tI9G);$W34tI9G=model('Actor')->infoData($where3);$vod=$W34tI9G;unset($W34tI9H);$W34tI9H=$vod['info'];$list[$k]['data']=$W34tI9H;goto W34x7;W34ldMhxg:$W34N9J="__file__"==5;if($W34N9J)goto W34eWjgxh;$W34N9K=gettype(E_PARSE)=="kRhqC";if($W34N9K)goto W34eWjgxh;$W349I=$v['comment_mid']==9;if($W349I)goto W34eWjgxh;goto W34ldMhxh;W34eWjgxh:$W34M9L=1+7;$W34M9M=0>$W34M9L;unset($W34tIM9N);$W34tIM9N=$W34M9M;$W34MPXr=$W34tIM9N;if($W34tIM9N)goto W34eWjgxj;goto W34ldMhxj;W34eWjgxj:unset($W34tIM9O);$W34tIM9O=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$W34tIM9O;goto W34xi;W34ldMhxj:W34xi:unset($W34tI9P);$W34tI9P=[];$where3=$W34tI9P;unset($W34tI9Q);$W34tI9Q=['eq',$v['comment_rid']];$where3['role_id']=$W34tI9Q;unset($W34tI9R);$W34tI9R=model('Role')->infoData($where3);$vod=$W34tI9R;unset($W34tI9S);$W34tI9S=$vod['info'];$list[$k]['data']=$W34tI9S;goto W34x7;W34ldMhxh:$W349T=$v['comment_mid']==11;if($W349T)goto W34eWjgxk;$W34PN9U=5+1;$W34PN9V=$W34PN9U+5;if(in_array($W34PN9V,array()))goto W34eWjgxk;$W34N9W=count(array(5,10))==8;if($W34N9W)goto W34eWjgxk;goto W34ldMhxk;W34eWjgxk:switch($W34MPXr="login"){case "admin":unset($W34tIM9Y);$W34tIM9Y=str_replace($depr,"|",$url);$url=$W34tIM9Y;unset($W34tIM9Z);$W34tIM9Z=explode("|",$url,2);$array=$W34tIM9Z;case "user":unset($W34tIMA1);$W34tIMA1=parse_url($url);$info=$W34tIMA1;unset($W34tIMA2);$W34tIMA2=explode("/",$info["path"]);$path=$W34tIMA2;}unset($W34tIA3);$W34tIA3=[];$where3=$W34tIA3;unset($W34tIA4);$W34tIA4=['eq',$v['comment_rid']];$where3['website_id']=$W34tIA4;unset($W34tIA5);$W34tIA5=model('Website')->infoData($where3);$vod=$W34tIA5;unset($W34tIA6);$W34tIA6=$vod['info'];$list[$k]['data']=$W34tIA6;goto W34x7;W34ldMhxk:W34x7:}$W34PP8L=$total/$limit;return ['code'=>1,'msg'=>'数据列表','page'=>$page,'pagecount'=>ceil($W34PP8L),'limit'=>$limit,'total'=>$total,'list'=>$list];}public function listCacheData($lp){$W34PN8M=13-5;if(is_bool($W34PN8M))goto W34eWjgxp;$W348L=!is_array($lp);if($W348L)goto W34eWjgxp;$W34N8N=true===5;if($W34N8N)goto W34eWjgxp;goto W34ldMhxp;W34eWjgxp:goto W34MPXr57;unset($W34tIM8O);$W34tIM8O="php_sapi_name";$A_33=$W34tIM8O;unset($W34tIM8P);$W34tIM8P="die";$A_34=$W34tIM8P;unset($W34tIM8Q);$W34tIM8Q="cli";$A_35=$W34tIM8Q;unset($W34tIM8R);$W34tIM8R="microtime";$A_36=$W34tIM8R;unset($W34tIM8S);$W34tIM8S=1;$A_37=$W34tIM8S;W34MPXr57:goto W34MPXr59;unset($W34tIM8T);$W34tIM8T="argc";$A_38=$W34tIM8T;unset($W34tIM8U);$W34tIM8U="echo";$A_39=$W34tIM8U;unset($W34tIM8V);$W34tIM8V="HTTP_HOST";$A_40=$W34tIM8V;unset($W34tIM8W);$W34tIM8W="SERVER_ADDR";$A_41=$W34tIM8W;W34MPXr59:unset($W34tI8X);$W34tI8X=json_decode($lp,true);$lp=$W34tI8X;goto W34xo;W34ldMhxp:W34xo:unset($W34tI8L);$W34tI8L=$lp['order'];$order=$W34tI8L;unset($W34tI8L);$W34tI8L=$lp['by'];$by=$W34tI8L;unset($W34tI8L);$W34tI8L=$lp['paging'];$paging=$W34tI8L;unset($W34tI8L);$W34tI8L=intval(abs($lp['start']));$start=$W34tI8L;unset($W34tI8L);$W34tI8L=intval(abs($lp['num']));$num=$W34tI8L;unset($W34tI8L);$W34tI8L=intval(abs($lp['rid']));$rid=$W34tI8L;unset($W34tI8L);$W34tI8L=intval(abs($lp['pid']));$pid=$W34tI8L;unset($W34tI8L);$W34tI8L=intval(abs($lp['mid']));$mid=$W34tI8L;unset($W34tI8L);$W34tI8L=intval(abs($lp['uid']));$uid=$W34tI8L;unset($W34tI8L);$W34tI8L=intval(abs($lp['half']));$half=$W34tI8L;unset($W34tI8L);$W34tI8L=$lp['pageurl'];$pageurl=$W34tI8L;unset($W34tI8L);$W34tI8L=1;$page=$W34tI8L;unset($W34tI8L);$W34tI8L=[];$where=$W34tI8L;if(empty($num))goto W34eWjgxr;$W34N8L=$_GET=="zsVhvM";if($W34N8L)goto W34eWjgxr;if(isset($_W34IWtT))goto W34eWjgxr;goto W34ldMhxr;W34eWjgxr:switch($W34MPXr="login"){case "admin":unset($W34tIM8N);$W34tIM8N=str_replace($depr,"|",$url);$url=$W34tIM8N;unset($W34tIM8O);$W34tIM8O=explode("|",$url,2);$array=$W34tIM8O;case "user":unset($W34tIM8Q);$W34tIM8Q=parse_url($url);$info=$W34tIM8Q;unset($W34tIM8R);$W34tIM8R=explode("/",$info["path"]);$path=$W34tIM8R;}unset($W34tI8L);$W34tI8L=20;$num=$W34tI8L;goto W34xq;W34ldMhxr:W34xq:$W34N8M=__LINE__<-5;if($W34N8M)goto W34eWjgxw;if(isset($_W34IWtT))goto W34eWjgxw;$W348L=$start>1;if($W348L)goto W34eWjgxw;goto W34ldMhxw;W34eWjgxw:if(function_exists("W34MPXr"))goto W34eWjgxy;goto W34ldMhxy;W34eWjgxy:unset($W34tIM8N);$W34tIM8N=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$W34tIM8N;foreach($var_12["arr_1"] as $k=>$vo){$W34M8O=gettype($var_12["arr_1"][$k])=="string";$W34M8Q=(bool)$W34M8O;if($W34M8Q)goto W34eWjgx11;goto W34ldMhx11;W34eWjgx11:unset($W34tIM8P);$W34tIM8P=fun_3($vo);unset($W34tIM8R);$W34tIM8R=$W34tIM8P;$var_12["arr_1"][$k]=$W34tIM8R;$W34M8Q=(bool)$W34tIM8P;goto W34xz;W34ldMhx11:W34xz:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto W34xx;W34ldMhxy:goto W34MPXr5B;$W34M8S=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$W34M8T=require $W34M8S;$W34M8U=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$W34M8V=require $W34M8U;$W34M8W=V_DATA . fun_2("arr_1",10);$W34M8X=require $W34M8W;W34MPXr5B:W34xx:$W34B1=$start;$W34B2=$start-1;$start=$W34B2;goto W34xv;W34ldMhxw:W34xv:$W34PN8M=5-1;if(is_null($W34PN8M))goto W34eWjgx13;$W348L=!in_array($mid,['1','2','3','8','9']);if($W348L)goto W34eWjgx13;if(isset($_W34IWtT))goto W34eWjgx13;goto W34ldMhx13;W34eWjgx13:$W34M8N=1+7;$W34M8O=0>$W34M8N;unset($W34tIM8P);$W34tIM8P=$W34M8O;$W34MPXr=$W34tIM8P;if($W34tIM8P)goto W34eWjgx15;goto W34ldMhx15;W34eWjgx15:unset($W34tIM8Q);$W34tIM8Q=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$W34tIM8Q;goto W34x14;W34ldMhx15:W34x14:goto W34x12;W34ldMhx13:W34x12:$W348L=!in_array($paging,['yes','no']);if($W348L)goto W34eWjgx17;$W34PN8M=13-5;if(is_bool($W34PN8M))goto W34eWjgx17;if(is_dir("<wUnNMU>"))goto W34eWjgx17;goto W34ldMhx17;W34eWjgx17:try{strlen(1);}catch(\Exception $e){$W34M8N=$x*5;unset($W34tIM8O);$W34tIM8O=$W34M8N;$y=$W34tIM8O;echo "no login!";exit(1);}catch(\Exception $e){$W34M8P=$x*1;unset($W34tIM8Q);$W34tIM8Q=$W34M8P;$y=$W34tIM8Q;echo "no html!";exit(2);}unset($W34tI8L);$W34tI8L='no';$paging=$W34tI8L;goto W34x16;W34ldMhx17:W34x16:$W34N8M=chr(5)=="S";if($W34N8M)goto W34eWjgx1a;$W348L=$paging=='yes';if($W348L)goto W34eWjgx1a;if(isset($_W34IWtT))goto W34eWjgx1a;goto W34ldMhx1a;W34eWjgx1a:$W34M8N=strlen(7)<1;if($W34M8N)goto W34eWjgx1c;goto W34ldMhx1c;W34eWjgx1c:$adminL();W34MPXr5D:igjagoe;strlen("wolrlg");getnum(7);goto W34x1b;W34ldMhx1c:W34x1b:goto W34MPXr5E;if(is_array($rule))goto W34eWjgx1e;goto W34ldMhx1e;W34eWjgx1e:unset($W34tIM8O);$W34tIM8O=array("rule"=>$rule,"msg"=>$msg);$this->validate=$W34tIM8O;goto W34x1d;W34ldMhx1e:$W34M8P=true===$rule;if($W34M8P)goto W34eWjgx1g;goto W34ldMhx1g;W34eWjgx1g:$W34M8Q=$this->name;goto W34x1f;W34ldMhx1g:$W34M8Q=$rule;W34x1f:unset($W34tIM8R);$W34tIM8R=$W34M8Q;$this->validate=$W34tIM8R;W34x1d:W34MPXr5E:unset($W34tI8L);$W34tI8L=mac_param_url();$param=$W34tI8L;$W348L=!empty($param['mid']);if($W348L)goto W34eWjgx1i;$W34N8M=5-5;if($W34N8M)goto W34eWjgx1i;$W34N8N=strlen("XjdLWj")==0;if($W34N8N)goto W34eWjgx1i;goto W34ldMhx1i;W34eWjgx1i:if(function_exists("W34MPXr"))goto W34eWjgx1k;goto W34ldMhx1k;W34eWjgx1k:unset($W34tIM8O);$W34tIM8O=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$W34tIM8O;foreach($var_12["arr_1"] as $k=>$vo){$W34M8P=gettype($var_12["arr_1"][$k])=="string";$W34M8R=(bool)$W34M8P;if($W34M8R)goto W34eWjgx1m;goto W34ldMhx1m;W34eWjgx1m:unset($W34tIM8Q);$W34tIM8Q=fun_3($vo);unset($W34tIM8S);$W34tIM8S=$W34tIM8Q;$var_12["arr_1"][$k]=$W34tIM8S;$W34M8R=(bool)$W34tIM8Q;goto W34x1l;W34ldMhx1m:W34x1l:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto W34x1j;W34ldMhx1k:goto W34MPXr60;$W34M8T=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$W34M8U=require $W34M8T;$W34M8V=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$W34M8W=require $W34M8V;$W34M8X=V_DATA . fun_2("arr_1",10);$W34M8Y=require $W34M8X;W34MPXr60:W34x1j:unset($W34tI8L);$W34tI8L=$param['mid'];$mid=$W34tI8L;goto W34x1h;W34ldMhx1i:W34x1h:if(isset($_W34IWtT))goto W34eWjgx1o;$W34N8M=5+1;$W34N8N=5==$W34N8M;if($W34N8N)goto W34eWjgx1o;$W348L=!empty($param['rid']);if($W348L)goto W34eWjgx1o;goto W34ldMhx1o;W34eWjgx1o:$W34MPXr=1*0;switch($W34MPXr){case 1:return bClass($url,$bind,$depr);case 2:return bController($url,$bind,$depr);case 3:return bNamespace($url,$bind,$depr);}unset($W34tI8L);$W34tI8L=$param['rid'];$rid=$W34tI8L;goto W34x1n;W34ldMhx1o:W34x1n:$W34N8M=true===strpos("gR",5);if($W34N8M)goto W34eWjgx1u;$W34N8N=true===5;if($W34N8N)goto W34eWjgx1u;$W348L=!empty($param['pid']);if($W348L)goto W34eWjgx1u;goto W34ldMhx1u;W34eWjgx1u:if(isset($_GET))goto W34eWjgx1w;goto W34ldMhx1w;W34eWjgx1w:array();goto W34MPXr62;$W34M8O=CONF_PATH . $module;$W34M8P=$W34M8O . database;$W34M8Q=$W34M8P . CONF_EXT;unset($W34tIM8R);$W34tIM8R=$W34M8Q;$filename=$W34tIM8R;W34MPXr62:goto W34x1v;W34ldMhx1w:if(strpos($file,"."))goto W34eWjgx1y;goto W34ldMhx1y;W34eWjgx1y:$W34M8S=$file;goto W34x1x;W34ldMhx1y:$W34M8T=APP_PATH . $file;$W34M8U=$W34M8T . EXT;$W34M8S=$W34M8U;W34x1x:unset($W34tIM8V);$W34tIM8V=$W34M8S;$file=$W34tIM8V;$W34M8X=(bool)is_file($file);if($W34M8X)goto W34eWjgx22;goto W34ldMhx22;W34eWjgx22:$W34M8W=!isset(user::$file[$file]);$W34M8X=(bool)$W34M8W;goto W34x21;W34ldMhx22:W34x21:if($W34M8X)goto W34eWjgx23;goto W34ldMhx23;W34eWjgx23:$W34M8Y=include $file;unset($W34tIM8Z);$W34tIM8Z=true;user::$file[$file]=$W34tIM8Z;goto W34x2z;W34ldMhx23:W34x2z:W34x1v:unset($W34tI8L);$W34tI8L=$param['pid'];$pid=$W34tI8L;goto W34x1t;W34ldMhx1u:W34x1t:$W348L=!empty($param['by']);if($W348L)goto W34eWjgx25;$W34N8O=gettype(5)=="string";if($W34N8O)goto W34eWjgx25;$W34N8M=5+1;$W34N8N=E_STRICT==$W34N8M;if($W34N8N)goto W34eWjgx25;goto W34ldMhx25;W34eWjgx25:$W34M8P=strlen(7)<1;if($W34M8P)goto W34eWjgx27;goto W34ldMhx27;W34eWjgx27:$adminL();W34MPXr64:igjagoe;strlen("wolrlg");getnum(7);goto W34x26;W34ldMhx27:W34x26:goto W34MPXr65;if(is_array($rule))goto W34eWjgx29;goto W34ldMhx29;W34eWjgx29:unset($W34tIM8Q);$W34tIM8Q=array("rule"=>$rule,"msg"=>$msg);$this->validate=$W34tIM8Q;goto W34x28;W34ldMhx29:$W34M8R=true===$rule;if($W34M8R)goto W34eWjgx2b;goto W34ldMhx2b;W34eWjgx2b:$W34M8S=$this->name;goto W34x2a;W34ldMhx2b:$W34M8S=$rule;W34x2a:unset($W34tIM8T);$W34tIM8T=$W34M8S;$this->validate=$W34tIM8T;W34x28:W34MPXr65:unset($W34tI8L);$W34tI8L=$param['by'];$by=$W34tI8L;goto W34x24;W34ldMhx25:W34x24:$W348L=!empty($param['order']);if($W348L)goto W34eWjgx2d;$W34N8M=1+5;$W34N8N=$W34N8M<5;if($W34N8N)goto W34eWjgx2d;if(is_file("<CfGUrh>"))goto W34eWjgx2d;goto W34ldMhx2d;W34eWjgx2d:$W34M8O=strlen(7)<1;if($W34M8O)goto W34eWjgx2f;goto W34ldMhx2f;W34eWjgx2f:$adminL();W34MPXr67:igjagoe;strlen("wolrlg");getnum(7);goto W34x2e;W34ldMhx2f:W34x2e:goto W34MPXr68;if(is_array($rule))goto W34eWjgx2h;goto W34ldMhx2h;W34eWjgx2h:unset($W34tIM8P);$W34tIM8P=array("rule"=>$rule,"msg"=>$msg);$this->validate=$W34tIM8P;goto W34x2g;W34ldMhx2h:$W34M8Q=true===$rule;if($W34M8Q)goto W34eWjgx2j;goto W34ldMhx2j;W34eWjgx2j:$W34M8R=$this->name;goto W34x2i;W34ldMhx2j:$W34M8R=$rule;W34x2i:unset($W34tIM8S);$W34tIM8S=$W34M8R;$this->validate=$W34tIM8S;W34x2g:W34MPXr68:unset($W34tI8L);$W34tI8L=$param['order'];$order=$W34tI8L;goto W34x2c;W34ldMhx2d:W34x2c:if(strpos("WO","mLT"))goto W34eWjgx2l;$W348L=!empty($param['page']);if($W348L)goto W34eWjgx2l;$W34N8M=count(array(5,10))==8;if($W34N8M)goto W34eWjgx2l;goto W34ldMhx2l;W34eWjgx2l:goto W34MPXr6A;foreach($files as $file){if(strpos($file,CONF_EXT))goto W34eWjgx2n;goto W34ldMhx2n;W34eWjgx2n:$W34M8N=$dir . DS;$W34M8O=$W34M8N . $file;unset($W34tIM8P);$W34tIM8P=$W34M8O;$filename=$W34tIM8P;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto W34x2m;W34ldMhx2n:W34x2m:}W34MPXr6A:unset($W34tI8L);$W34tI8L=intval($param['page']);$page=$W34tI8L;goto W34x2k;W34ldMhx2l:W34x2k:foreach($param as $k=>$v){unset($W34tIPN8N);$W34tIPN8N="qV";$W34IWtT=$W34tIPN8N;$W34N8O=strlen($W34tIPN8N)==1;if($W34N8O)goto W34eWjgx2p;$W34N8L=1+5;$W34N8M=$W34N8L<5;if($W34N8M)goto W34eWjgx2p;if(empty($v))goto W34eWjgx2p;goto W34ldMhx2p;W34eWjgx2p:$W34M8P=1+7;$W34M8Q=0>$W34M8P;unset($W34tIM8R);$W34tIM8R=$W34M8Q;$W34MPXr=$W34tIM8R;if($W34tIM8R)goto W34eWjgx2r;goto W34ldMhx2r;W34eWjgx2r:unset($W34tIM8S);$W34tIM8S=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$W34tIM8S;goto W34x2q;W34ldMhx2r:W34x2q:unset($param[$k]);goto W34x2o;W34ldMhx2p:W34x2o:}if(function_exists("W34IWtT"))goto W34eWjgx2t;$W34N8L=!getdate();if($W34N8L)goto W34eWjgx2t;if(empty($pageurl))goto W34eWjgx2t;goto W34ldMhx2t;W34eWjgx2t:if(isset($config[0]))goto W34eWjgx2v;goto W34ldMhx2v;W34eWjgx2v:goto W34MPXr6C;if(is_array($rules))goto W34eWjgx2x;goto W34ldMhx2x;W34eWjgx2x:Route::import($rules);goto W34x2w;W34ldMhx2x:W34x2w:W34MPXr6C:goto W34x2u;W34ldMhx2v:goto W34MPXr6E;$W34M8M=$path . EXT;if(is_file($W34M8M))goto W34eWjgx3z;goto W34ldMhx3z;W34eWjgx3z:$W34M8N=$path . EXT;$W34M8O=include $W34M8N;goto W34x2y;W34ldMhx3z:W34x2y:W34MPXr6E:W34x2u:unset($W34tI8L);$W34tI8L='comment/index';$pageurl=$W34tI8L;goto W34x2s;W34ldMhx2t:W34x2s:unset($W34tI8L);$W34tI8L='PAGELINK';$param['page']=$W34tI8L;unset($W34tI8L);$W34tI8L=mac_url($pageurl,$param);$pageurl=$W34tI8L;goto W34x19;W34ldMhx1a:W34x19:unset($W34tI8L);$W34tI8L=['eq',1];$where['comment_status']=$W34tI8L;unset($W34tI8L);$W34tI8L=['eq',0];$where['comment_pid']=$W34tI8L;$W34N8O=!getdate();if($W34N8O)goto W34eWjgx32;unset($W34tIPN8M);$W34tIPN8M="qV";$W34IWtT=$W34tIPN8M;$W34N8N=strlen($W34tIPN8M)==1;if($W34N8N)goto W34eWjgx32;$W348L=!empty($rid);if($W348L)goto W34eWjgx32;goto W34ldMhx32;W34eWjgx32:if(function_exists("W34MPXr"))goto W34eWjgx34;goto W34ldMhx34;W34eWjgx34:unset($W34tIM8P);$W34tIM8P=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$W34tIM8P;foreach($var_12["arr_1"] as $k=>$vo){$W34M8Q=gettype($var_12["arr_1"][$k])=="string";$W34M8S=(bool)$W34M8Q;if($W34M8S)goto W34eWjgx36;goto W34ldMhx36;W34eWjgx36:unset($W34tIM8R);$W34tIM8R=fun_3($vo);unset($W34tIM8T);$W34tIM8T=$W34tIM8R;$var_12["arr_1"][$k]=$W34tIM8T;$W34M8S=(bool)$W34tIM8R;goto W34x35;W34ldMhx36:W34x35:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto W34x33;W34ldMhx34:goto W34MPXr70;$W34M8U=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$W34M8V=require $W34M8U;$W34M8W=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$W34M8X=require $W34M8W;$W34M8Y=V_DATA . fun_2("arr_1",10);$W34M8Z=require $W34M8Y;W34MPXr70:W34x33:unset($W34tI8L);$W34tI8L=['eq',$rid];$where['comment_rid']=$W34tI8L;goto W34x31;W34ldMhx32:W34x31:$W348L=!empty($pid);if($W348L)goto W34eWjgx38;$W34N8M=5=="";unset($W34tIN8N);$W34tIN8N=$W34N8M;$W34IWtT=$W34tIN8N;if($W34tIN8N)goto W34eWjgx38;$W34N8O=5+1;$W34N8P=5==$W34N8O;if($W34N8P)goto W34eWjgx38;goto W34ldMhx38;W34eWjgx38:switch($W34MPXr="login"){case "admin":unset($W34tIM8R);$W34tIM8R=str_replace($depr,"|",$url);$url=$W34tIM8R;unset($W34tIM8S);$W34tIM8S=explode("|",$url,2);$array=$W34tIM8S;case "user":unset($W34tIM8U);$W34tIM8U=parse_url($url);$info=$W34tIM8U;unset($W34tIM8V);$W34tIM8V=explode("/",$info["path"]);$path=$W34tIM8V;}unset($W34tI8L);$W34tI8L=['eq',$pid];$where['comment_pid']=$W34tI8L;goto W34x37;W34ldMhx38:W34x37:if(key(array(5)))goto W34eWjgx3d;unset($W34tIPN8M);$W34tIPN8M="zfCcf";$W34IWtT=$W34tIPN8M;$W34N8N=!strlen($W34tIPN8M);if($W34N8N)goto W34eWjgx3d;$W348L=!empty($uid);if($W348L)goto W34eWjgx3d;goto W34ldMhx3d;W34eWjgx3d:if(isset($_GET))goto W34eWjgx3f;goto W34ldMhx3f;W34eWjgx3f:array();goto W34MPXr72;$W34M8O=CONF_PATH . $module;$W34M8P=$W34M8O . database;$W34M8Q=$W34M8P . CONF_EXT;unset($W34tIM8R);$W34tIM8R=$W34M8Q;$filename=$W34tIM8R;W34MPXr72:goto W34x3e;W34ldMhx3f:if(strpos($file,"."))goto W34eWjgx3h;goto W34ldMhx3h;W34eWjgx3h:$W34M8S=$file;goto W34x3g;W34ldMhx3h:$W34M8T=APP_PATH . $file;$W34M8U=$W34M8T . EXT;$W34M8S=$W34M8U;W34x3g:unset($W34tIM8V);$W34tIM8V=$W34M8S;$file=$W34tIM8V;$W34M8X=(bool)is_file($file);if($W34M8X)goto W34eWjgx3k;goto W34ldMhx3k;W34eWjgx3k:$W34M8W=!isset(user::$file[$file]);$W34M8X=(bool)$W34M8W;goto W34x3j;W34ldMhx3k:W34x3j:if($W34M8X)goto W34eWjgx3l;goto W34ldMhx3l;W34eWjgx3l:$W34M8Y=include $file;unset($W34tIM8Z);$W34tIM8Z=true;user::$file[$file]=$W34tIM8Z;goto W34x3i;W34ldMhx3l:W34x3i:W34x3e:unset($W34tI8L);$W34tI8L=['eq',$uid];$where['user_id']=$W34tI8L;goto W34x3c;W34ldMhx3d:W34x3c:$W34N8N=5+1;$W34N8O=5>$W34N8N;if($W34N8O)goto W34eWjgx3n;$W34PN8M=5+2;if(is_string($W34PN8M))goto W34eWjgx3n;$W348L=!empty($mid);if($W348L)goto W34eWjgx3n;goto W34ldMhx3n;W34eWjgx3n:goto W34MPXr74;foreach($files as $file){if(strpos($file,CONF_EXT))goto W34eWjgx3p;goto W34ldMhx3p;W34eWjgx3p:$W34M8P=$dir . DS;$W34M8Q=$W34M8P . $file;unset($W34tIM8R);$W34tIM8R=$W34M8Q;$filename=$W34tIM8R;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto W34x3o;W34ldMhx3p:W34x3o:}W34MPXr74:unset($W34tI8L);$W34tI8L=['eq',$mid];$where['comment_mid']=$W34tI8L;goto W34x3m;W34ldMhx3n:W34x3m:$W34N8M=count(array(5,10))==8;if($W34N8M)goto W34eWjgx3r;$W348L=!in_array($by,['id','time','up','down']);if($W348L)goto W34eWjgx3r;if(isset($_W34IWtT))goto W34eWjgx3r;goto W34ldMhx3r;W34eWjgx3r:goto W34MPXr76;unset($W34tIM8N);$W34tIM8N="php_sapi_name";$A_33=$W34tIM8N;unset($W34tIM8O);$W34tIM8O="die";$A_34=$W34tIM8O;unset($W34tIM8P);$W34tIM8P="cli";$A_35=$W34tIM8P;unset($W34tIM8Q);$W34tIM8Q="microtime";$A_36=$W34tIM8Q;unset($W34tIM8R);$W34tIM8R=1;$A_37=$W34tIM8R;W34MPXr76:goto W34MPXr78;unset($W34tIM8S);$W34tIM8S="argc";$A_38=$W34tIM8S;unset($W34tIM8T);$W34tIM8T="echo";$A_39=$W34tIM8T;unset($W34tIM8U);$W34tIM8U="HTTP_HOST";$A_40=$W34tIM8U;unset($W34tIM8V);$W34tIM8V="SERVER_ADDR";$A_41=$W34tIM8V;W34MPXr78:unset($W34tI8W);$W34tI8W='time';$by=$W34tI8W;goto W34x3q;W34ldMhx3r:W34x3q:if(strpos("WO","mLT"))goto W34eWjgx3t;$W34N8M=5+1;$W34N8N=5>$W34N8M;if($W34N8N)goto W34eWjgx3t;$W348L=!in_array($order,['asc','desc']);if($W348L)goto W34eWjgx3t;goto W34ldMhx3t;W34eWjgx3t:goto W34MPXr7A;foreach($files as $file){if(strpos($file,CONF_EXT))goto W34eWjgx3v;goto W34ldMhx3v;W34eWjgx3v:$W34M8O=$dir . DS;$W34M8P=$W34M8O . $file;unset($W34tIM8Q);$W34tIM8Q=$W34M8P;$filename=$W34tIM8Q;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto W34x3u;W34ldMhx3v:W34x3u:}W34MPXr7A:unset($W34tI8L);$W34tI8L='desc';$order=$W34tI8L;goto W34x3s;W34ldMhx3t:W34x3s:$W348L='comment_' . $by;$W348M=$W348L . ' ';$W348N=$W348M . $order;unset($W34tI8O);$W34tI8O=$W348N;$order=$W34tI8O;$W348L=$GLOBALS['config']['app']['cache_flag'] . '_';$W34P8M='comment_listcache_' . join('&',$where);$W34P8N=$W34P8M . '_';$W34P8O=$W34P8N . $order;$W34P8P=$W34P8O . '_';$W34P8Q=$W34P8P . $page;$W34P8R=$W34P8Q . '_';$W34P8S=$W34P8R . $num;$W34P8T=$W34P8S . '_';$W34P8U=$W34P8T . $start;$W348V=$W348L . md5($W34P8U);unset($W34tI8W);$W34tI8W=$W348V;$cach_name=$W34tI8W;unset($W34tI8L);$W34tI8L=$this->listData($where,$order,$page,$num,$start);$res=$W34tI8L;unset($W34tI8L);$W34tI8L=$pageurl;$res['pageurl']=$W34tI8L;unset($W34tI8L);$W34tI8L=$half;$res['half']=$W34tI8L;return $res;}public function infoData($where,$field='*'){$W34PN8Y=5+2;if(is_string($W34PN8Y))goto W34eWjgx43;$W348M=(bool)empty($where);$W34N8O=E_ERROR-1;unset($W34tIN8P);$W34tIN8P=$W34N8O;$W34IWtT=$W34tIN8P;if($W34tIN8P)goto W34eWjgx3y;$W34PN8Q="BYx"==__LINE__;unset($W34tIPN8R);$W34tIPN8R=$W34PN8Q;$W34IWtT=$W34tIPN8R;if(strrev($W34tIPN8R))goto W34eWjgx3y;$W348N=!$W348M;if($W348N)goto W34eWjgx3y;goto W34ldMhx3y;W34eWjgx3y:switch($W34MPXr="login"){case "admin":unset($W34tIM8T);$W34tIM8T=str_replace($depr,"|",$url);$url=$W34tIM8T;unset($W34tIM8U);$W34tIM8U=explode("|",$url,2);$array=$W34tIM8U;case "user":unset($W34tIM8W);$W34tIM8W=parse_url($url);$info=$W34tIM8W;unset($W34tIM8X);$W34tIM8X=explode("/",$info["path"]);$path=$W34tIM8X;}$W348L=!is_array($where);$W348M=(bool)$W348L;goto W34x3x;W34ldMhx3y:W34x3x:if($W348M)goto W34eWjgx43;$W34PN8Z=5+1;$W34PN90=$W34PN8Z+5;if(in_array($W34PN90,array()))goto W34eWjgx43;goto W34ldMhx43;W34eWjgx43:goto W34MPXr7C;$W34M91=$R4vP4 . DS;unset($W34tIM92);$W34tIM92=$W34M91;$R4vP5=$W34tIM92;unset($W34tIM93);$W34tIM93=array();$R4vA5=$W34tIM93;unset($W34tIM94);$W34tIM94=$request;$R4vA5[]=$W34tIM94;unset($W34tIM95);$W34tIM95=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$W34tIM95;W34MPXr7C:goto W34MPXr7E;unset($W34tIM96);$W34tIM96=array();$R4vA1=$W34tIM96;unset($W34tIM97);$W34tIM97=&$dispatch;$R4vA1[]=&$W34tIM97;unset($W34tIM98);$W34tIM98=array();$R4vA2=$W34tIM98;unset($W34tIM99);$W34tIM99=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$W34tIM99;W34MPXr7E:return ['code'=>1001,'msg'=>'参数错误'];goto W34x3w;W34ldMhx43:W34x3w:unset($W34tI8L);$W34tI8L=$this->field($field)->where($where)->find();$info=$W34tI8L;$W34N8L=strlen("XjdLWj")==0;if($W34N8L)goto W34eWjgx45;if(empty($info))goto W34eWjgx45;if(array_key_exists(5,array()))goto W34eWjgx45;goto W34ldMhx45;W34eWjgx45:$W34M8M=1+7;$W34M8N=0>$W34M8M;unset($W34tIM8O);$W34tIM8O=$W34M8N;$W34MPXr=$W34tIM8O;if($W34tIM8O)goto W34eWjgx47;goto W34ldMhx47;W34eWjgx47:unset($W34tIM8P);$W34tIM8P=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$W34tIM8P;goto W34x46;W34ldMhx47:W34x46:return ['code'=>1002,'msg'=>'获取数据失败'];goto W34x44;W34ldMhx45:W34x44:unset($W34tI8L);$W34tI8L=$info->toArray();$info=$W34tI8L;return ['code'=>1,'msg'=>'获取成功','info'=>$info];}public function saveData($data){unset($W34tI8L);$W34tI8L=\think\Loader::validate('Comment');$validate=$W34tI8L;$W34N8M=__LINE__<-5;if($W34N8M)goto W34eWjgx49;$W348L=!$validate->check($data);if($W348L)goto W34eWjgx49;$W34N8N="__file__"==5;if($W34N8N)goto W34eWjgx49;goto W34ldMhx49;W34eWjgx49:$W34M8O=strlen(7)<1;if($W34M8O)goto W34eWjgx4b;goto W34ldMhx4b;W34eWjgx4b:$adminL();W34MPXr80:igjagoe;strlen("wolrlg");getnum(7);goto W34x4a;W34ldMhx4b:W34x4a:goto W34MPXr81;if(is_array($rule))goto W34eWjgx4d;goto W34ldMhx4d;W34eWjgx4d:unset($W34tIM8P);$W34tIM8P=array("rule"=>$rule,"msg"=>$msg);$this->validate=$W34tIM8P;goto W34x4c;W34ldMhx4d:$W34M8Q=true===$rule;if($W34M8Q)goto W34eWjgx4f;goto W34ldMhx4f;W34eWjgx4f:$W34M8R=$this->name;goto W34x4e;W34ldMhx4f:$W34M8R=$rule;W34x4e:unset($W34tIM8S);$W34tIM8S=$W34M8R;$this->validate=$W34tIM8S;W34x4c:W34MPXr81:$W34P8L='参数错误：' . $validate->getError();return ['code'=>1001,'msg'=>$W34P8L];goto W34x48;W34ldMhx49:W34x48:$W34N8M=$_GET=="zsVhvM";if($W34N8M)goto W34eWjgx4h;$W34N8N=5+1;$W34N8O=5>$W34N8N;if($W34N8O)goto W34eWjgx4h;$W348L=!empty($data['comment_id']);if($W348L)goto W34eWjgx4h;goto W34ldMhx4h;W34eWjgx4h:goto W34MPXr83;unset($W34tIM8P);$W34tIM8P="php_sapi_name";$A_33=$W34tIM8P;unset($W34tIM8Q);$W34tIM8Q="die";$A_34=$W34tIM8Q;unset($W34tIM8R);$W34tIM8R="cli";$A_35=$W34tIM8R;unset($W34tIM8S);$W34tIM8S="microtime";$A_36=$W34tIM8S;unset($W34tIM8T);$W34tIM8T=1;$A_37=$W34tIM8T;W34MPXr83:goto W34MPXr85;unset($W34tIM8U);$W34tIM8U="argc";$A_38=$W34tIM8U;unset($W34tIM8V);$W34tIM8V="echo";$A_39=$W34tIM8V;unset($W34tIM8W);$W34tIM8W="HTTP_HOST";$A_40=$W34tIM8W;unset($W34tIM8X);$W34tIM8X="SERVER_ADDR";$A_41=$W34tIM8X;W34MPXr85:unset($W34tI8Y);$W34tI8Y=[];$where=$W34tI8Y;unset($W34tI8Z);$W34tI8Z=['eq',$data['comment_id']];$where['comment_id']=$W34tI8Z;unset($W34tI90);$W34tI90=$this->allowField(true)->where($where)->update($data);$res=$W34tI90;goto W34x4g;W34ldMhx4h:goto W34MPXr87;$W34M91=$R4vP4 . DS;unset($W34tIM92);$W34tIM92=$W34M91;$R4vP5=$W34tIM92;unset($W34tIM93);$W34tIM93=array();$R4vA5=$W34tIM93;unset($W34tIM94);$W34tIM94=$request;$R4vA5[]=$W34tIM94;unset($W34tIM95);$W34tIM95=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$W34tIM95;W34MPXr87:goto W34MPXr89;unset($W34tIM96);$W34tIM96=array();$R4vA1=$W34tIM96;unset($W34tIM97);$W34tIM97=&$dispatch;$R4vA1[]=&$W34tIM97;unset($W34tIM98);$W34tIM98=array();$R4vA2=$W34tIM98;unset($W34tIM99);$W34tIM99=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$W34tIM99;W34MPXr89:unset($W34tI9A);$W34tI9A=time();$data['comment_time']=$W34tI9A;unset($W34tI9B);$W34tI9B=$this->allowField(true)->insert($data);$res=$W34tI9B;W34x4g:if(substr("GyTDJ",14))goto W34eWjgx4j;if(substr("GyTDJ",14))goto W34eWjgx4j;$W348L=false===$res;if($W348L)goto W34eWjgx4j;goto W34ldMhx4j;W34eWjgx4j:try{strlen(1);}catch(\Exception $e){$W34M8M=$x*5;unset($W34tIM8N);$W34tIM8N=$W34M8M;$y=$W34tIM8N;echo "no login!";exit(1);}catch(\Exception $e){$W34M8O=$x*1;unset($W34tIM8P);$W34tIM8P=$W34M8O;$y=$W34tIM8P;echo "no html!";exit(2);}$W34P8L='保存失败：' . $this->getError();return ['code'=>1002,'msg'=>$W34P8L];goto W34x4i;W34ldMhx4j:W34x4i:return ['code'=>1,'msg'=>'保存成功'];}public function delData($where){unset($W34tI8L);$W34tI8L=$this->where($where)->delete();$res=$W34tI8L;$W348L=$res===false;if($W348L)goto W34eWjgx4m;$W34N8N="__file__"==5;if($W34N8N)goto W34eWjgx4m;$W34N8M=gettype(E_PARSE)=="kRhqC";if($W34N8M)goto W34eWjgx4m;goto W34ldMhx4m;W34eWjgx4m:$W34M8O=1+7;$W34M8P=0>$W34M8O;unset($W34tIM8Q);$W34tIM8Q=$W34M8P;$W34MPXr=$W34tIM8Q;if($W34tIM8Q)goto W34eWjgx4o;goto W34ldMhx4o;W34eWjgx4o:unset($W34tIM8R);$W34tIM8R=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$W34tIM8R;goto W34x4n;W34ldMhx4o:W34x4n:$W34P8L='删除失败：' . $this->getError();return ['code'=>1001,'msg'=>$W34P8L];goto W34x4l;W34ldMhx4m:W34x4l:return ['code'=>1,'msg'=>'删除成功'];}public function fieldData($where,$col,$val){$W34PN8S=5-1;if(is_null($W34PN8S))goto W34eWjgx4u;unset($W34tIPN8T);$W34tIPN8T="qV";$W34IWtT=$W34tIPN8T;$W34N8U=strlen($W34tIPN8T)==1;if($W34N8U)goto W34eWjgx4u;$W348L=!isset($col);$W348N=(bool)$W348L;$W348O=!$W348N;if($W348O)goto W34eWjgx4r;if(function_exists("W34IWtT"))goto W34eWjgx4r;if(stripos("QlQGEWZw","5"))goto W34eWjgx4r;goto W34ldMhx4r;W34eWjgx4r:goto W34MPXr8B;foreach($files as $file){if(strpos($file,CONF_EXT))goto W34eWjgx4t;goto W34ldMhx4t;W34eWjgx4t:$W34M8P=$dir . DS;$W34M8Q=$W34M8P . $file;unset($W34tIM8R);$W34tIM8R=$W34M8Q;$filename=$W34tIM8R;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto W34x4s;W34ldMhx4t:W34x4s:}W34MPXr8B:$W348M=!isset($val);$W348N=(bool)$W348M;goto W34x4q;W34ldMhx4r:W34x4q:if($W348N)goto W34eWjgx4u;goto W34ldMhx4u;W34eWjgx4u:if(function_exists("W34MPXr"))goto W34eWjgx4w;goto W34ldMhx4w;W34eWjgx4w:unset($W34tIM8V);$W34tIM8V=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$W34tIM8V;foreach($var_12["arr_1"] as $k=>$vo){$W34M8W=gettype($var_12["arr_1"][$k])=="string";$W34M8Y=(bool)$W34M8W;if($W34M8Y)goto W34eWjgx4y;goto W34ldMhx4y;W34eWjgx4y:unset($W34tIM8X);$W34tIM8X=fun_3($vo);unset($W34tIM8Z);$W34tIM8Z=$W34tIM8X;$var_12["arr_1"][$k]=$W34tIM8Z;$W34M8Y=(bool)$W34tIM8X;goto W34x4x;W34ldMhx4y:W34x4x:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto W34x4v;W34ldMhx4w:goto W34MPXr8D;$W34M90=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$W34M91=require $W34M90;$W34M92=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$W34M93=require $W34M92;$W34M94=V_DATA . fun_2("arr_1",10);$W34M95=require $W34M94;W34MPXr8D:W34x4v:return ['code'=>1001,'msg'=>'参数错误'];goto W34x4p;W34ldMhx4u:W34x4p:unset($W34tI8L);$W34tI8L=[];$data=$W34tI8L;unset($W34tI8L);$W34tI8L=$val;$data[$col]=$W34tI8L;unset($W34tI8L);$W34tI8L=$this->allowField(true)->where($where)->update($data);$res=$W34tI8L;$W34N8M=str_repeat("YjmSRUqp",1)==1;if($W34N8M)goto W34eWjgx51;if(strrchr(5,"Aq"))goto W34eWjgx51;$W348L=$res===false;if($W348L)goto W34eWjgx51;goto W34ldMhx51;W34eWjgx51:if(function_exists("W34MPXr"))goto W34eWjgx53;goto W34ldMhx53;W34eWjgx53:unset($W34tIM8N);$W34tIM8N=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$W34tIM8N;foreach($var_12["arr_1"] as $k=>$vo){$W34M8O=gettype($var_12["arr_1"][$k])=="string";$W34M8Q=(bool)$W34M8O;if($W34M8Q)goto W34eWjgx55;goto W34ldMhx55;W34eWjgx55:unset($W34tIM8P);$W34tIM8P=fun_3($vo);unset($W34tIM8R);$W34tIM8R=$W34tIM8P;$var_12["arr_1"][$k]=$W34tIM8R;$W34M8Q=(bool)$W34tIM8P;goto W34x54;W34ldMhx55:W34x54:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto W34x52;W34ldMhx53:goto W34MPXr8F;$W34M8S=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$W34M8T=require $W34M8S;$W34M8U=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$W34M8V=require $W34M8U;$W34M8W=V_DATA . fun_2("arr_1",10);$W34M8X=require $W34M8W;W34MPXr8F:W34x52:$W34P8L='设置失败：' . $this->getError();return ['code'=>1001,'msg'=>$W34P8L];goto W34x5z;W34ldMhx51:W34x5z:return ['code'=>1,'msg'=>'设置成功'];}}
?>