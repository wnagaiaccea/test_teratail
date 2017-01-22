wep_data = [
             ['A',28.0,0.1],
             ['B',35.0,0.2],
            ]
function change() {
    wep_name_val = document.attack_g_d.weapon.value;
    main_a = document.attack_g_d.m_a_up.value;
    sub_a = document.attack_g_d.s_a_up.value;

    for (var i = 0; i < wep_data.length;) {
        wep_val = wep_data[i][2];
        if (wep_name_val != wep_val) {
            i++;
        } else {
            wep_name = wep_data[i][0];
            damage_o = wep_data[i][1];
            damage = damage_o.toFixed(1);

            html_add = "\t" + '<tr>' + "\n";
            html_add += "\t" + '<td>' + wep_name + '</td>' + "\n";
            html_add += "\t" + '<td>' + damage + '</td>' + '\n';
            if (damage > 0) {
                d_n = Math.ceil(100 / damage);
            } else {
                d_n = 0;
            }
            html_add += "\t" + '<td>' + d_n + '</td>' + '\n';
            attack_g = (main_a * 10) + (sub_a * 3);
            g_d = ((0.99 * attack_g) - Math.pow((0.09 * attack_g), 2)) / 100;
            z = 1 + g_d;
            a_g_d = Math.floor((damage * z) * 1000) / 1000;
            if (Math.ceil(100 / a_g_d) < Math.ceil(100 / damage) && damage < 100) {
                max_a_g_d = 100 / (Math.ceil(100 / damage) - 1);
                if (max_a_g_d == 25.0 || max_a_g_d == 50.0 || max_a_g_d == 100) {
                    max_a_g_d -= 0.1;
                }
                a_g_d = max_a_g_d.toFixed(1);
            }
            html_add += "\t" + '<td>' + a_g_d + '</td>' + '\n';

            html_add += "\t" + '</tr>';
            console.log(html_add);

            break;
      }
    }
}
