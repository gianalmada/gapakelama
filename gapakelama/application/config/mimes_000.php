<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| MIME TYPES
| -------------------------------------------------------------------
| This file contains an array of mime types.  It is used by the
| Upload class to help identify allowed file types.
|
*/
return array(
	'hqx'	=>	array('application/mac-binhex40', 'application/mac-binhex', 'application/x-binhex40', 'application/x-mac-binhex40'),
	'cpt'	=>	'application/mac-compactpro',
	'csv'	=>	array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain'),
	'bin'	=>	array('application/macbinary', 'application/mac-binary', 'application/octet-stream', 'application/x-binary', 'application/x-macbinary'),
	'dms'	=>	'application/octet-stream',
	'lha'	=>	'application/octet-stream',
	'lzh'	=>	'application/octet-stream',
	'exe'	=>	array('application/octet-stream', 'application/x-msdownload'),
	'class'	=>	'application/octet-stream',
	'psd'	=>	array('application/x-photoshop', 'image/vnd.adobe.photoshop'),
	'so'	=>	'application/octet-stream',
	'sea'	=>	'application/octet-stream',
	'dll'	=>	'application/octet-stream',
	'oda'	=>	'application/oda',
	'pdf'	=>	array('application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream'),
	'ai'	=>	array('application/pdf', 'application/postscript'),
	'eps'	=>	'application/postscript',
	'ps'	=>	'application/postscript',
	'smi'	=>	'application/smil',
	'smil'	=>	'application/smil',
	'mif'	=>	'application/vnd.mif',
	'xls'	=>	array('application/vnd.ms-excel', 'application/msexcel', 'application/x-msexcel', 'application/x-ms-excel', 'application/x-excel', 'application/x-dos_ms_excel', 'application/xls', 'application/x-xls', 'application/excel', 'application/download', 'application/vnd.ms-office', 'application/msword'),
	'ppt'	=>	array('application/powerpoint', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office', 'application/msword'),
	'pptx'	=> 	array('application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/x-zip', 'application/zip'),
	'wbxml'	=>	'application/wbxml',
	'wmlc'	=>	'application/wmlc',
	'dcr'	=>	'application/x-director',
	'dir'	=>	'application/x-director',
	'dxr'	=>	'application/x-director',
	'dvi'	=>	'application/x-dvi',
	'gtar'	=>	'application/x-gtar',
	'gz'	=>	'application/x-gzip',
	'gzip'  =>	'application/x-gzip',
	'php'	=>	array('application/x-httpd-php', 'application/php', 'application/x-php', 'text/php', 'text/x-php', 'application/x-httpd-php-source'),
	'php4'	=>	'application/x-httpd-php',
	'php3'	=>	'application/x-httpd-php',
	'phtml'	=>	'application/x-httpd-php',
	'phps'	=>	'application/x-httpd-php-source',
	'js'	=>	array('application/x-javascript', 'text/plain'),
	'swf'	=>	'application/x-shockwave-flash',
	'sit'	=>	'application/x-stuffit',
	'tar'	=>	'application/x-tar',
	'tgz'	=>	array('application/x-tar', 'application/x-gzip-compressed'),
	'z'	=>	'application/x-compress',
	'xhtml'	=>	'application/xhtml+xml',
	'xht'	=>	'application/xhtml+xml',
	'zip'	=>	array('application/x-zip', 'application/zip', 'application/x-zip-compressed', 'application/s-compressed', 'multipart/x-zip'),
	'rar'	=>	array('application/x-rar', 'application/rar', 'application/x-rar-compressed'),
	'mid'	=>	'audio/midi',
	'midi'	=>	'audio/midi',
	'mpga'	=>	'audio/mpeg',
	'mp2'	=>	'audio/mpeg',
	'mp3'	=>	array('audio/mpeg', 'audio/mpg', 'audio/mpeg3', 'audio/mp3'),
	'aif'	=>	array('audio/x-aiff', 'audio/aiff'),
	'aiff'	=>	array('audio/x-aiff', 'audio/aiff'),
	'aifc'	=>	'audio/x-aiff',
	'ram'	=>	'audio/x-pn-realaudio',
	'rm'	=>	'audio/x-pn-realaudio',
	'rpm'	=>	'audio/x-pn-realaudio-plugin',
	'ra'	=>	'audio/x-realaudio',
	'rv'	=>	'video/vnd.rn-realvideo',
	'wav'	=>	array('audio/x-wav', 'audio/wave', 'audio/wav'),
	'bmp'	=>	array('image/bmp', 'image/x-bmp', 'image/x-bitmap', 'image/x-xbitmap', 'image/x-win-bitmap', 'image/x-windows-bmp', 'image/ms-bmp', 'image/x-ms-bmp', 'application/bmp', 'application/x-bmp', 'application/x-win-bitmap'),
	'gif'	=>	'image/gif',
	'jpeg'	=>	array('image/jpeg', 'image/pjpeg'),
	'jpg'	=>	array('image/jpeg', 'image/pjpeg'),
	'jpe'	=>	array('image/jpeg', 'image/pjpeg'),
	'jp2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'j2k'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'jpf'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'jpg2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'jpx'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'jpm'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'mj2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'mjp2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
	'png'	=>	array('image/png',  'image/x-png'),
	'tiff'	=>	'image/tiff',
	'tif'	=>	'image/tiff',
	'css'	=>	array('text/css', 'text/plain'),
	'html'	=>	array('text/html', 'text/plain'),
	'htm'	=>	array('text/html', 'text/plain'),
	'shtml'	=>	array('text/html', 'text/plain'),
	'txt'	=>	'text/plain',
	'text'	=>	'text/plain',
	'log'	=>	array('text/plain', 'text/x-log'),
	'rtx'	=>	'text/richtext',
	'rtf'	=>	'text/rtf',
	'xml'	=>	array('application/xml', 'text/xml', 'text/plain'),
	'xsl'	=>	array('application/xml', 'text/xsl', 'text/xml'),
	'mpeg'	=>	'video/mpeg',
	'mpg'	=>	'video/mpeg',
	'mpe'	=>	'video/mpeg',
	'qt'	=>	'video/quicktime',
	'mov'	=>	'video/quicktime',
	'avi'	=>	array('video/x-msvideo', 'video/msvideo', 'video/avi', 'application/x-troff-msvideo'),
	'movie'	=>	'video/x-sgi-movie',
	'doc'	=>	array('application/msword', 'application/vnd.ms-office'),
	'docx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword', 'application/x-zip'),
	'dot'	=>	array('application/msword', 'application/vnd.ms-office'),
	'dotx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword'),
	'xlsx'	=>	array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/zip', 'application/vnd.ms-excel', 'application/msword', 'application/x-zip'),
	'word'	=>	array('application/msword', 'application/octet-stream'),
	'xl'	=>	'application/excel',
	'eml'	=>	'message/rfc822',
	'json'  =>	array('application/json', 'text/json'),
	'pem'   =>	array('application/x-x509-user-cert', 'application/x-pem-file', 'application/octet-stream'),
	'p10'   =>	array('application/x-pkcs10', 'application/pkcs10'),
	'p12'   =>	'application/x-pkcs12',
	'p7a'   =>	'application/x-pkcs7-signature',
	'p7c'   =>	array('application/pkcs7-mime', 'application/x-pkcs7-mime'),
	'p7m'   =>	array('application/pkcs7-mime', 'application/x-pkcs7-mime'),
	'p7r'   =>	'application/x-pkcs7-certreqresp',
	'p7s'   =>	'application/pkcs7-signature',
	'crt'   =>	array('application/x-x509-ca-cert', 'application/x-x509-user-cert', 'application/pkix-cert'),
	'crl'   =>	array('application/pkix-crl', 'application/pkcs-crl'),
	'der'   =>	'application/x-x509-ca-cert',
	'kdb'   =>	'application/octet-stream',
	'pgp'   =>	'application/pgp',
	'gpg'   =>	'application/gpg-keys',
	'sst'   =>	'application/octet-stream',
	'csr'   =>	'application/octet-stream',
	'rsa'   =>	'application/x-pkcs7',
	'cer'   =>	array('application/pkix-cert', 'application/x-x509-ca-cert'),
	'3g2'   =>	'video/3gpp2',
	'3gp'   =>	array('video/3gp', 'video/3gpp'),
	'mp4'   =>	'video/mp4',
	'm4a'   =>	'audio/x-m4a',
	'f4v'   =>	array('video/mp4', 'video/x-f4v'),
	'flv'	=>	'video/x-flv',
	'webm'	=>	'video/webm',
	'aac'   =>	'audio/x-acc',
	'm4u'   =>	'application/vnd.mpegurl',
	'm3u'   =>	'text/plain',
	'xspf'  =>	'application/xspf+xml',
	'vlc'   =>	'application/videolan',
	'wmv'   =>	array('video/x-ms-wmv', 'video/x-ms-asf'),
	'au'    =>	'audio/x-au',
	'ac3'   =>	'audio/ac3',
	'flac'  =>	'audio/x-flac',
	'ogg'   =>	array('audio/ogg', 'video/ogg', 'application/ogg'),
	'kmz'	=>	array('application/vnd.google-earth.kmz', 'application/zip', 'application/x-zip'),
	MAMh=  �������
����ʷ�����	���������Ț�����������������������ʬ���������Ǽʹ�ʜ���ʩǫ�ɷ�ʹ���ɸ��ɷʹ�Ǫ���

����
��
����˸�
��	��ɫ             �� �    ̈�    �	   ���   �����  ���� � ����������Ɉ � ���� � ���ȩ  ��� �   � �{   �                ���$;���9�D�L'�&ɓL�M"b���ӿb��G���1"9�ռ/'2��gD���3�(<��u��S��0[W<�'�x���z�'?j���ԃ���t�H���UM�_~�t���Kw�ݗ���	�u��|l�v��1�ì���q�c��U9�_i�V��ȝ6�_�r�,�yk��*!�^�������I�T�F�J�k�Vn���w���(N���6%L��V1)��i�gZM�O��)`E�[r��+q�ZB�N��~����>����c�%S`��Np�m�s�(���^���E���� A�G���s��`���X�-��,��> �d���R��Ktna��K���甦�rD_Ê�х��0�
���{�3H4Xsm1NS`���Vo��V�9"� []4Ȟi``V�9X��O_I�ўZ`)]�D� ��8���`�0YVi��l���������f��&
`��ViNV��SL�r'-��=���� �vE<e��Ap��t`�B�9�Y��;	��g�A�rr
;�g���41��آ�6��� ��>�~� � "(�(
FR@u��v���@��� jn� rv@�	z>��@( A����������@&�܀@���A>~� � ��!" ��� ���H�3������Ё����UO�y���
@A CE@�(
H.P���Wfn� rv@�R{$?�@�@�
�Q ��e�9�� )S�TY tx`�
�7@֔�V� �ʘ1� 3<��(�B@�) �@�Sn���D���� ��2�lp� tx`��?�`�@�;�w�#9�Y�<��m<h��<}��@}2qʥ��1��	N�����{#l�{T����� ��A��p]{�[��G��z�
t�&�cQ�TD�t�"��GEQ�D�~T����"�࣊���*�2>���Q�ޏ�DjTE��F۰}�b��>*������`/��A�������ܞ]�����2a�n� �ʂ�B���$13 @�LE�h���@���A>��
AC \L�@��j �z~� � ��!" ��`�(�Z�����&��@���@����
�E07Q�j��ޑ&\$���h�� ���({Х;U�����{oa.� 2��͙9Va@�A4 �s�����L=�=�:�~�>�? l���$<O`�0��)��LҫW�Tg�q`� �`��*��$ڀf��2QP��N�R����C"�*0v�  jn� rz@�	@  ��!" ���k_`�
BR0u�[u � 
~WKSG�p`uA�࿠�X|~��� 0�P�<�x0������A��ڐ8�_r@����,|.�,R7�7�갹��A���������1e��p38�90�W}�
�P ��-#P�Q�ހ&Im@���@���4�|p �B0DRP��]���6�