<?php
// by ismarianto 
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
                    if (preg_match("/^http/", $menu['items'][$itemId]->link)) {
                        $html .= "<li><a href='" . $menu['items'][$itemId]->link . "'><i class='fa fa-files-o'></i>" . $menu['items'][$itemId]->nama_menu . "</a></li>";
                    } else {
                        if ($menu['items'][$itemId]->id_parent == 0) :
                            $html .= "<li><a href='" . base_url() . '' . $menu['items'][$itemId]->link . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        else :
                            $html .= "<li class='treeview'><a href='" . base_url() . '' . $menu['items'][$itemId]->link . "'><i class='fa fa-files-o'></i><span>" . $menu['items'][$itemId]->nama_menu . "</span></a></li>";
                        endif;
                    }
                }
                if (isset($menu['parents'][$itemId])) {
                    if (preg_match("/^http/", $menu['items'][$itemId]->link)) {
                        $html .= "<li class='treeview'><a href='" . $menu['items'][$itemId]->link . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span><i class='fa fa-angle-left pull-right'></i></a>";
                    } else {
                        $html .= "<li class='treeview'><a href='" . $menu['items'][$itemId]->link . "'>" . $icon . "<span>" . $menu['items'][$itemId]->nama_menu . "</span><i class='fa fa-angle-left pull-right'></i></a>";
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
            $data = $this->ci->db->select('a.id_jenis,a.nama_arsip, b.jenis_arsip,c.nama,a.tanggal,a.lokasi')->from('arsip a')
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
}
