<?php
// by ismarianto 

use function PHPSTORM_META\override;

class properti
{

    function  __construct()
    {

        $this->ci = &get_instance();
    }

    function user($id_user)
    {
        $data = $this->ci->db->select('*')->from('login')->where('id_user', $id_user)->get();
        if ($data->num_rows() > 0) {
            $row    = $data->row();
            $result = [
                'id_user' => $row->id_user,
                'username' => $row->username,
                'password' => $row->password,
                'nama' => $row->nama,
                'level' => $row->level,
                'email' => $row->email,
                'foto' => $row->foto,
                'log' => $row->log,
                'active' => $row->active,
                'judul' => 'Login detail',
            ];
        } else {
            $result  = [
                'id_user' => '',
                'username' => '',
                'password' => '',
                'nama' => '',
                'level' => '',
                'email' => '',
                'foto' => '',
                'log' => '',
                'active' => '',
                'judul' => 'Login detail',
            ];
        }
        return $result;
    }

    function menu_app($positionM, $level)
    {
        $query = $this->ci->db->query("SELECT id_menu, nama_menu, link, id_parent ,position,icon FROM menu where aktif='Ya' AND position='" . $positionM . "' AND locate('$level',level) > 0 order by urutan");
        $menu = array('items' => array(), 'parents' => array());
        foreach ($query->result() as $menus) {
            $menu['items'][$menus->id_menu] = $menus;
            $menu['position'][$menus->position] = $menus->position;
            $menu['parents'][$menus->id_parent][] = $menus->id_menu;
        }
        if ($menu) {
            $result = $this->buitlmenu(0, $menu);
            return $result;
        } else {
            return FALSE;
        }
    }

    private function buitlmenu($parent, $menu)
    {
        $html = "";
        if (isset($menu['parents'][$parent])) {
            if ($parent == '0') {
                if (isset($menu['position']['Bottom']) == "Bottom") {
                    $html .= "<li><a href='" . base_url() . "'><i class='fa fa-dashboard'></i><span> Home</span></li>";
                } else {
                    null;
                }
            } else {
                $html .= '<ul class="treeview-menu">';
            }
            foreach ($menu['parents'][$parent] as $itemId) {
                $icon = ($menu['items'][$itemId]->icon) ? '<i class="' . $menu['items'][$itemId]->icon . '"></i>' : '<i class="fa fa-list"></i>';

                if (!isset($menu['parents'][$itemId])) {
                    if (preg_match("/^http/", strtolower($menu['items'][$itemId]->link))) {
                        $html .= "<li><a href='" . strtolower($menu['items'][$itemId]->link) . "'><i class='fa fa-files-o'></i>" . $menu['items'][$itemId]->nama_menu . "</a></li>";
                    } else {
                        if ($menu['items'][$itemId]->id_parent == 0) :
                            $html .= "<li><a href='" . base_url() . '' . strtolower($menu['items'][$itemId]->link) . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        else :
                            $html .= "<li class='treeview'><a href='" . base_url() . '' . strtolower($menu['items'][$itemId]->link) . "'><i class='fa fa-files-o'></i><span>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        endif;
                    }
                }
                if (isset($menu['parents'][$itemId])) {
                    if (preg_match("/^http/", strtolower($menu['items'][$itemId]->link))) {
                        $html .= "<li class='treeview'><a href='" . strtolower($menu['items'][$itemId]->link) . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span><i class='fa fa-angle-left pull-right'></i></a>";
                    } else {
                        $html .= "<li class='treeview'><a href='" . strtolower($menu['items'][$itemId]->link) . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span><i class='fa fa-angle-left pull-right'></i></a>";
                    }
                    $html .= self::buitlmenu($itemId, $menu);
                    $html .= "</li>";
                }
            }
            $html .= "</ul>";
        }
        return $html;
    }

    public function archiveType($tahun, $limit)
    {
        if ($limit != '') {
            $data = $this->ci->db->select('a.id_arsip,a.id_jenis,a.nama_arsip, b.jenis_arsip,c.nama,a.tanggal,a.lokasi')->from('arsip a')
                ->join('jenis_arsip b', 'a.id_jenis=b.id_jenis', 'left outer')
                ->join('login c', 'a.id_pejabat=c.id_user', 'left')
                ->where('date_format(tanggal,"%Y")', $tahun)
                ->order_by('a.id_arsip')
                ->limit($limit)
                ->get();
            return $data;
        } else {
            $data = $this->ci->db->select('a.id_jenis,a.nama_arsip, b.jenis_arsip,c.nama,a.tanggal,a.lokasi')->from('arsip a')
                ->join('jenis_arsip b', 'a.id_jenis=b.id_jenis', 'left')
                ->join('login c', 'a.id_pejabat=c.id_user', 'left')
                ->where('date_format(tanggal,"%Y")', $tahun)
                ->order_by('a.id_arsip')
                ->get();
            return $data;
        }
    }
    // render js 
    public function getarsipByType($tahun)
    {
        $data = $this->ci->db->select('count(a.id_arsip) as jum,a.id_jenis,a.nama_arsip, b.jenis_arsip,c.nama')->from('arsip a')
            ->join('jenis_arsip b', 'a.id_jenis=b.id_jenis', 'left')
            ->join('login c', 'a.id_pejabat=c.id_user', 'left')
            ->where('date_format(tanggal,"%Y")', $tahun)
            ->group_by('a.id_jenis')
            ->get();
        return $data;
    }
    public function getDataArsip($jenis_id)
    {
        return $this->ci->db->select('count(id_arsip) as count')->from('arsip')->where('id_jenis', $jenis_id)->get();
    }

    //sppd

    public function output($params)
    {
        return $this->ci->load->view($params);
    }

    public function render($params)
    {
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $thisPath = dirname($_SERVER['PHP_SELF'] . '/zayed_sspd');
        $onlyPath = str_replace($rootPath, '', $thisPath);
        self::override();

        if ($onlyPath == '/zayed_sspd') {
            self::output($params);
        } else {
            print('Directory_forbiden');
        }
    }


    //code of letter
    function getCode()
    {
        $tahun = date('Y');
        $data  = $this->ci->db->select_max('id')
            ->from('sppd')
            ->get()->row();
        if ($data->id  > 1) {
            $nomor_surat = $tahun . '/' . $data->id . '/sspd/' . $data->id . '-' . $tahun;
            return $nomor_surat;
        } else {
            $nomor_surat = $tahun . '/' . 1 . '/sspd/1' . $tahun;
            return $nomor_surat;
        }
    }

    //response json
    public function json(array $params)
    {
        http_response_code(200);
        return json_encode($params);
    }

    public function parsing($parsing)
    {
        $arr = explode(',', '\'' . $parsing . '\'');
        $sc  = implode('\',\'', $arr);
        return $sc;
    }

    public function key($key)
    {
        return sha1('ismarianto_zayed' . md5('$1'));
    }

    public function tmjabatan()
    {
        return $this->ci->db->get('tmjabatan');
    }


    public function golongan($golongan)
    {
        if ($golongan == '') {
            return 'kosong';
        } else {
            $data =  $this->ci->db->get_where('tmjabatan', array('id' => $golongan));
            if ($data->num_rows() > 0) {
                return $data->row()->Description;
            } else {
                return 'Kosong';
            }
        }
    }
    public function satker()
    {
        $CI = &get_instance();
        return $CI->db->select('*')->from('sikd_satker')->get()->result();
    }
    public function getJenis($jenis_id)
    {
        $CI = &get_instance();
        $data =   $CI->db->get_where('jenis_surat', [
            'id_jenis' => $jenis_id
        ])->row_array();
        return isset($data['nama_jenis']) ? str_replace('~', ' ', $data['nama_jenis']) : 'Kosong';
    }
}
