@extends('layouts.app')

@section('content')
<div class="container">
    <table id="dataTable" class="table table-striped table-hover table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">tabs</th>
            <th scope="col">Attribut</th>
            <th scope="col">Value</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th>Général</th>
                <th>getDepartment</th>
                <td>{{ serialize($user->getDepartment() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getDepartmentNumber</th>
                <td>{{ serialize($user->getDepartmentNumber() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getTitle</th>
                <td>{{ serialize($user->getTitle() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getFirstName</th>
                <td>{{ serialize($user->getFirstName() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getInfo</th>
                <td>{{ serialize($user->getInfo() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getInitials</th>
                <td>{{ serialize($user->getInitials() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getCountry</th>
                <td>{{ serialize($user->getCountry() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getStreetAddress</th>
                <td>{{ serialize($user->getStreetAddress() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getPostalCode</th>
                <td>{{ serialize($user->getPostalCode() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getPostOfficeBox</th>
                <td>{{ serialize($user->getPostOfficeBox() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getPhysicalDeliveryOfficeName</th>
                <td>{{ serialize($user->getPhysicalDeliveryOfficeName() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getTelephoneNumber</th>
                <td>{{ serialize($user->getTelephoneNumber() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getFacsimileNumber</th>
                <td>{{ serialize($user->getFacsimileNumber() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getLocale</th>
                <td>{{ serialize($user->getLocale() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getCompany</th>
                <td>{{ serialize($user->getCompany() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getEmail</th>
                <td>{{ serialize($user->getEmail() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>$user->getEmails()</th>
                <td>{{ serialize($user->getEmails() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getOtherMailbox</th>
                <td>{{ serialize($user->getOtherMailbox() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getHomeMdb</th>
                <td>{{ serialize($user->getHomeMdb() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getHomeDrive</th>
                <td>{{ serialize($user->getHomeDrive() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getHomeDirectory</th>
                <td>{{ serialize($user->getHomeDirectory() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getMailNickname</th>
                <td>{{ serialize($user->getMailNickname() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getThumbnail</th>
                <td>{{ serialize($user->getThumbnail() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getThumbnailEncoded</th>
                <td>{{ serialize($user->getThumbnailEncoded() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getJpegPhoto</th>
                <td>{{ serialize($user->getJpegPhoto() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getJpegPhotoEncoded</th>
                <td>{{ serialize($user->getJpegPhotoEncoded() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getManager</th>
                <td>{{ serialize($user->getManager() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getEmployeeId</th>
                <td>{{ serialize($user->getEmployeeId() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getEmployeeNumber</th>
                <td>{{ serialize($user->getEmployeeNumber() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getRoomNumber</th>
                <td>{{ serialize($user->getRoomNumber() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getPersonalTitle</th>
                <td>{{ serialize($user->getPersonalTitle() ) }}</td>
            </tr> 
            <tr>
                <th>Général</th>
                <th>getPrimaryGroup</th>
                <td>{{ serialize($user->getPrimaryGroup() ) }}</td>
            </tr> 
        </tbody>
      </table>
</div>
@endsection
