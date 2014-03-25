  <div id="brigade-info">
    <h2 id="brigade-name">The Code for America Brigade</h2>
    <p id="program-info">The Brigade program helps local volunteer groups partner with government in an effort to enhance their communities. Brigades hold regular hack nights, events, advocate for open data, and deploy apps.</p>
  </div>

  <div id="join-form">
    <form accept-charset="UTF-8" action="http://brigade.codeforamerica.org/members" id="new_user" method="post" novalidate="novalidate">
      <h3>Want to get connected?</h3>
      <ul class="list-form">
        <li class="form-field">
            <label for="user_full_name">Full name</label>
            <input id="user_full_name" name="user[full_name]" type="text" placeholder="Ben Franklin">
        </li>
        <li class="form-field">
            <label for="user_email">Email</label>
            <input id="user_email" name="user[email]" type="text" placeholder="benfranklin@codeforamerica.org">
        </li>
        <li class="form-field">

        <select id="brigade_id" name="brigade_id" style="display:none;">
        </select>


        <div>
        <input name="user[work_in_government]" type="hidden" value="0">

        <label for="user_work_in_government">
            <input id="user_work_in_government" name="user[work_in_government]" type="checkbox" value="1">
            I work in government
        </li>
      </ul>


      <input id="user_human_check" name="user[human_check]" size="50" type="hidden">
      <input type="hidden" name="source" value="brigade">
      <input name="utf8" type="hidden" value="✓">
      <input name="commit" type="submit" value="Submit">
    </form>
  </div>