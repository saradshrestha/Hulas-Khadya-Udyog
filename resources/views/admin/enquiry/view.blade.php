<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-striped">

                   <tr>
                       <th>
                           Name
                       </th>
                       <td>
                           {{ $contact->name }}
                       </td>
                   </tr>
                   <tr>
                       <th>
                           Email
                       </th>
                       <td>
                           {{ $contact->email }}
                       </td>
                   </tr>
                   <tr>
                       <th>
                           Message
                       </th>
                       <td>
                           {{ $contact->message }}
                       </td>
                   </tr>
                </table>
            </div>
            <div class="card" >
                <div class="card-body">
                    <p class="card-text">{{ $contact->remarks }}</p>
                </div>
            </div>

        </div>
    </div>
</div>