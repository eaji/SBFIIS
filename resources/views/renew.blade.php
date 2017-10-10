@extends('layouts.app')

@section('content')

<!--{{ route('renew.cr-crte') }} --->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('renew.cr-crte.store') }}"> <!--  lagay route after ma decide d.b. churva (renew.cr-crte) -->
            {{ csrf_field() }}
              <div class="form-group{{ $errors->has('RegisteredCorporateName') ? ' has-error' : '' }}">
                <label for="RegisteredCorporateName" class="col-md-4 control-label">Registered Corporate Name:</label>
                <div class="col-md-6">
                  <input id="RegisteredCorporateName" type="text" class="form-control" name="RegisteredCorporateName" value="{{ old('RegisteredCorporateName') }}" required>
                    @if ($errors->has('RegisteredCorporateName'))
                      <span class="help-block">
                        <strong>{{ $errors->first('RegisteredCorporateName') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('TradeName') ? ' has-error' : '' }}">
                <label for="TradeName" class="col-md-4 control-label">Trade Name (if applicable):</label>
                <div class="col-md-6">
                  <input id="TradeName" type="text" class="form-control" name="TradeName" value="{{ old('TradeName') }}" required>
                    @if ($errors->has('TradeName'))
                      <span class="help-block">
                        <strong>{{ $errors->first('TradeName') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('BIRtin') ? ' has-error' : '' }}">
                <label for="BIRTin" class="col-md-4 control-label">BIR Tax Identification No.:</label>
                <div class="col-md-6">
                  <input id="BIRTin" type="number" class="form-control" name="BIRTin" value="{{ old('BIRTin') }}" required>
                    @if ($errors->has('BIRTin'))
                      <span class="help-block">
                        <strong>{{ $errors->first('BIRTin') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('ParentCompany') ? ' has-error' : '' }}">
                <label for="ParentCompany" class="col-md-4 control-label">Parent Company:</label>
                <div class="col-md-6">
                  <input id="ParentCompany" type="text" class="form-control" name="ParentCompany" value="{{ old('ParentCompany') }}" required>
                    @if ($errors->has('ParentCompany'))
                      <span class="help-block">
                        <strong>{{ $errors->first('ParentCompany') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <!-- WAIT FOR CHANGES -->
              <div class="form-group">
                <label for="Company Address" class="col-md-4 control-label">Company Address </label>
              </div>
              <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
                <label for="Address" class="col-md-4 control-label">Address:</label>
                <div class="col-md-6">
                  <input  id="Address" type="text" class="form-control" name="Address" value="{{ old('Address') }}" required>
                    @if ($errors->has('Address'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Address') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('City') ? ' has-error' : '' }}">
                <label for="City" class="col-md-4 control-label">City</label>
                <div class="col-md-6">
                  <input id="City" type="text" class="form-control" name="City" value="{{ old('City') }}" required>
                    @if ($errors->has('City'))
                      <span class="help-block">
                        <strong>{{ $errors->first('City') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <!--COMPANY ADDESS-->
              <div class="form-group{{ $errors->has('PrimaryBusinessActivity') ? ' has-error' : '' }}">
                <label for="PrimaryBusinessActivity" class="col-md-4 control-label">Primary Business Activity:</label>
                <div class="col-md-6">
                  <textarea class="form-control" rows="5" id="PrimaryBusinessActivity"  name="PrimaryBusinessActivity" value="{{ old('PrimaryBusinessActivity') }}" required> </textarea>
                    @if ($errors->has('PrimaryBusinessActivity'))
                        <span class="help-block">
                        <strong>{{ $errors->first('PrimaryBusinessActivity') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <!--SBF ADDRESS WAIT FOR CHANGES-->
              <div class="form-group">
                <label for="SBFAddress" class="col-md-4 control-label">SBF Address/Facility:</label>
              </div>
              <div class="form-group{{ $errors->has('SBFAddress') ? ' has-error' : '' }}">
                <label for="SBFAddress" class="col-md-4 control-label">Address:</label>
                <div class="col-md-6">
                  <input id="SBFAddress" type="text" class="form-control" name="SBFAddress" value="{{ old('SBFAddress') }}" required>
                    @if ($errors->has('SBFAddress'))
                      <span class="help-block">
                        <strong>{{ $errors->first('SBFAddress') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('District') ? ' has-error' : '' }}">
                <label for="SBFAddress" class="col-md-4 control-label">District:</label>
                <div class="col-md-6">
                  <input id="District" type="text" class="form-control" name="District" value="{{ old('District') }}" required>
                    @if ($errors->has('District'))
                      <span class="help-block">
                        <strong>{{ $errors->first('District') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <!--SBF ADDRESS -->

              <div class="form-group{{ $errors->has('TelMobileNo') ? ' has-error' : '' }}">
                <label for="TelMobileNo" class="col-md-4 control-label">Telephone/Mobile No.:</label>
                <div class="col-md-6">
                  <input id="TelMobileNo" type="number"  class="form-control" name="TelMobileNo" value="{{ old('TelMobileNo') }}" required>
                    @if ($errors->has('TelMobileNo'))
                      <span class="help-block">
                        <strong>{{ $errors->first('TelMobileNo') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('FaxNo') ? ' has-error' : '' }}">
                <label for="FaxNo" class="col-md-4 control-label">Fax No.:</label>
                <div class="col-md-6">
                  <input id="FaxNo" type="number"  class="form-control" name="FaxNo" value="{{ old('FaxNo') }}" required>
                    @if ($errors->has('FaxNo'))
                      <span class="help-block">
                        <strong>{{ $errors->first('FaxNo') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Email:</label>
                <div class="col-md-6">
                  <input id="email" type="email"  class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('ContactPerson') ? ' has-error' : '' }}">
                <label for="ContactPerson" class="col-md-4 control-label">Contact Person & Designation:</label>
                <div class="col-md-6">
                  <input id="ContactPerson" type="text"  class="form-control" name="ContactPerson" value="{{ old('ContactPerson') }}" required>
                    @if ($errors->has('ContactPerson'))
                      <span class="help-block">
                        <strong>{{ $errors->first('ContactPerson') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('AuthorizedSignatory') ? ' has-error' : '' }}">
                <label for="AuthorizedSignatory" class="col-md-4 control-label">Authorized Signatory:</label>
                <div class="col-md-6">
                  <input id="AuthorizedSignatory" type="text"  class="form-control" name="AuthorizedSignatory" value="{{ old('AuthorizedSignatory') }}" required>
                    @if ($errors->has('AuthorizedSignatory'))
                      <span class="help-block">
                        <strong>{{ $errors->first('AuthorizedSignatory') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('Status') ? ' has-error' : '' }}">
                <label for="Status" class="col-md-4 control-label">Status:</label>
                <div class="col-md-6">
                  <select id="Status" class="form-control" name="Status" required>
                    <option value="Operational">Operational</option>
                    <option value="Non-Operational/On-going Construction">Non-Operational/On-going Construction</option>
                  </select>
                    @if ($errors->has('Status'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Status') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group">
                <label for="NoofEmployees" class="col-md-4 control-label">No. of Employees:</label>
              </div>
              <div class="form-group{{ $errors->has('Regular') ? ' has-error' : '' }}">
                <label for="Regular" class="col-md-4 control-label">Regular:</label>
                <div class="col-md-6">
                  <input id="Regular" type="number"  class="form-control" name="Regular" value="{{ old('Regular') }}" required>
                    @if ($errors->has('Regular'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Regular') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('Contractual') ? ' has-error' : '' }}">
                <label for="Contractual" class="col-md-4 control-label">Contractual:</label>
                <div class="col-md-6">
                  <input id="Contractual" type="number"  class="form-control" name="Contractual" value="{{ old('Contractual') }}" required>
                    @if ($errors->has('Contractual'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Contractual') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('Expatriates') ? ' has-error' : '' }}">
                <label for="Expatriates" class="col-md-4 control-label">Expatriates:</label>
                <div class="col-md-6">
                  <input id="Expatriates" type="number"  class="form-control" name="Expatriates" value="{{ old('Expatriates') }}" required>
                    @if ($errors->has('Expatriates'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Expatriates') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('TotalAssets') ? ' has-error' : '' }}">
                <label for="TotalAssets" class="col-md-4 control-label">Total Assets:</label>
                <div class="col-md-6">
                  <input id="TotalAssets" type="number"  class="form-control" name="TotalAssets" value="{{ old('TotalAssets') }}" required>
                    @if ($errors->has('TotalAssets'))
                      <span class="help-block">
                        <strong>{{ $errors->first('TotalAssets') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('NetInLoss)') ? ' has-error' : '' }}">
                <label for="NetInLoss" class="col-md-4 control-label">Net Income/(Loss):</label>
                <div class="col-md-6">
                  <input id="NetInLoss" type="number"  class="form-control" name="NetInLoss" value="{{ old('NetInLoss') }}" required>
                    @if ($errors->has('NetIncome/(Loss)'))
                      <span class="help-block">
                        <strong>{{ $errors->first('NetInLoss)') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('NetInLoss)') ? ' has-error' : '' }}">
                <label for="NetInLoss" class="col-md-4 control-label">Net Income/(Loss):</label>
                <div class="col-md-6">
                  <input id="NetInLoss" type="number"  class="form-control" name="NetInLoss" value="{{ old('NetInLoss') }}" required>
                    @if ($errors->has('NetIncome/(Loss)'))
                      <span class="help-block">
                        <strong>{{ $errors->first('NetInLoss)') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="LatestAuditedFinancialStatement(AFS)" class="col-md-4 control-label">Latest Audited Financial Statement (AFS):</label>
                <div class="col-md-6">
                  <br>
                  <input id="AFS" type="file"  class="form-control" name="AFS" value="{{ old('AFS)') }}" required>
                    @if ($errors->has('AFS'))
                      <span class="help-block">
                        <strong>{{ $errors->first('AFS') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="LatestAnnualIncomeTaxReturn(ITR)" class="col-md-4 control-label">Latest Annual Income Tax Return (ITR):</label>
                <div class="col-md-6">
                  <br>
                  <input id="ITR" type="file"  class="form-control" name="ITR" value="{{ old('ITR)') }}" required>
                    @if ($errors->has('ITR'))
                      <span class="help-block">
                        <strong>{{ $errors->first('ITR') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="UpdatedSECGeneralInformationSheetSECCertification" class="col-md-4 control-label">Updated SEC General Information Sheet/SEC Certification (for corporation/partnership):</label>
                <div class="col-md-6">
                  <br><br>
                  <input id="SECCert" type="file"  class="form-control" name="SECCert" value="{{ old('SECCert)') }}" required>
                    @if ($errors->has('SECCert'))
                      <span class="help-block">
                        <strong>{{ $errors->first('SECCert') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <label for="UpdatedInsurancePolicystatingSBMAasthebeneficiary" class="col-md-4 control-label">Updated Insurance Policy stating SBMA as the beneficiary (for direct lessees only):</label>
                <div class="col-md-6">
                  <br><br>
                  <input id="InsurancePolicy" type="file"  class="form-control" name="InsurancePolicy" value="{{ old('InsurancePolicy)') }}" required>
                    @if ($errors->has('InsurancePolicy'))
                      <span class="help-block">
                        <strong>{{ $errors->first('InsurancePolicy') }}</strong>
                      </span>
                    @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">Renew</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>




<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Required Documents:</div>

                <div class="panel-body">
                  <h4 align="center"> The applicant is required to submit the following documents with this Application Form: </h4>
                  <br>
                  <p>
                </div>
            </div>
        </div>
    </div>
</div>

-->








@endsection
