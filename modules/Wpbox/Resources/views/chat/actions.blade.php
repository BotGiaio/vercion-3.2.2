<div class="col-lg-4 col-6 my-auto ps-0 align-right" style="text-align: right">
    
    <b-dropdown size="sm" id="dropdown-right" right :text="getAssignedUser(activeChat)" variant="primary" class="m-2">
        <b-dropdown-item v-for="(user, key) in users" :key="key" @click="assignUser(key, activeChat.id)">
            @{{user}}
        </b-dropdown-item>
    </b-dropdown>
   
   




</div>