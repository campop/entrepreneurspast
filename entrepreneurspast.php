<?php

# Class implementing the Campop online atlas
require_once ('online-atlas/onlineAtlas.php');
class entrepreneurspast extends onlineAtlas
{
	# Function to assign defaults additional to the general application defaults
	public function defaults ()
	{
		# Add implementation defaults
		$defaults = array (
			
			// Application name
			'applicationName' => 'Atlas of entrepreneurship',
			'pageHeader' => false,
			'h1' => '<h1>Atlas of entrepreneurship</h1>',
			
			// Database
			'database' => 'entrepreneurspast',
			'username' => 'entrepreneurspast',
			'password' => NULL,
			
			// Geocoder
			'geocoderApiKey' => NULL,		// Obtain at https://www.cyclestreets.net/api/apply/
			
			// First run message
			'firstRunMessageHtml' =>
				  '<p><strong>Welcome to the Atlas of entrepreneurship, from CAMPOP</strong></p>'
				. '<p>The Atlas of Entrepreneurship website helps you explore changes over 1851-1911 and access the underlying data.</p>',
			
			// CSV downloads
			'downloadFilenameBase' => 'entrepreneurspast',
			'downloadInitialNotice' => "This data has been produced from the BBCE (PI: R.J. Bennett) with funding from the ESRC (ES/M010953), using an enhanced version of the digital census data from Schurer, K. and Higgs, E. (2014) Integrated Census Microdata (I-CeM), 1851-1911 [data collection] Colchester, Essex: UK Data Archive [distributor] SN: 7481, http://dx.doi.org/10.5255/UKDA-SN-7481-1; and Bennett, R., Smith, H., Van Lieshout, C., Montebruno Bondi, P., and Newton, G. (2020) BBCE - The British Business Census of Entrepreneurs [data collection] Colchester, Essex, UK data Archives [distributor].",
			
			// Disable full descriptions
			'enableFullDescriptions' => false,
			
			// Datasets
			'datasets' => array (1851, 1861, 1871, 1881, 1891, 1901, 1911),
			
			// Disable zoomed out mode
			'zoomedOut' => false,
			
			// Name field for summary box
			'farField' => 'REGDIST',
			
			// Unknown values
			'valueUnknown' => -9999,
			'colourUnknown' => false,
			
			// Colour stops
			'colourStops' => array (	// Colour scales can be created at http://www.colorbrewer.org/
				'#fffe85',	// Yellow - least
				'#f9d05a',
				'#f2a732',	// Orange
				'#af5312',
				'#690100',	// Brown - most
			),
			
			// Defaults
			'defaultDataset' => 1881,
			'defaultField' => 'N_EntsTot',
			
			// Fields
			'expandableHeadings' => true,
			'fields' => array (
				
				// General fields
				'year' => array (
					'label' => 'Year',
					'description' => 'Year',
					'intervals' => '',
					'general' => true,
				),
				'REGDIST' => array (
					'label' => 'Registration district',
					'description' => 'Registration district',
					'intervals' => '',
					'general' => true,
				),
				'TOWN' => array (
					'label' => 'Town',
					'description' => 'Town',
					'intervals' => '',
					'general' => false,		// Available as a field in its own right, as well as used for area labels
					'intervalsWildcard' => 'Town (by name)',
					'intervals' => array (
						'Town (by name)'	=> 'blue',
						'Other areas'		=> NULL,
					),
				),
				
				// Data fields
				'UrbanClass' => array (
					'label' => 'Urban classification',
					'description' => 'Urban/rural classification',
					'intervals' => array (
						'Urban'					=> '#0071fe',
						'Rural higher density'	=> '#d2ffbe',
						'Rural'					=> '#74b273',
					),
				),
				'N_EntsTot' => array (
					'label' => 'Total',
					'description' => 'Number of entrepreneurs, total',
					'intervals' => '<100, 100 - <250, 250 - <500, 500 - <1000, ≥1000',
					'grouping' => 'Number of entrepreneurs',
					'unavailable' => array ('1871'),
				),
				'N_EntsMale' => array (
					'label' => 'Male',
					'description' => 'Number of entrepreneurs, male',
					'intervals' => '<100, 100 - <250, 250 - <500, 500 - <1000, ≥1000',
					'grouping' => 'Number of entrepreneurs',
					'unavailable' => array ('1871'),
				),
				'N_EntsFem' => array (
					'label' => 'Female',
					'description' => 'Number of entrepreneurs, female',
					'intervals' => '<100, 100 - <250, 250 - <500, 500 - <1000, ≥1000',
					'grouping' => 'Number of entrepreneurs',
					'unavailable' => array ('1871'),
				),
				'N_EmpTot' => array (
					'label' => 'Total',
					'description' => 'Number of employers, total',
					'intervals' => '<20, 20 - <100, 100 - <250, 250 - <500, ≥500',
					'grouping' => 'Number of employers',
					'unavailable' => array ('1871'),
				),
				'N_Emp_Male' => array (
					'label' => 'Male',
					'description' => 'Number of employers, male',
					'intervals' => '<20, 20 - <100, 100 - <250, 250 - <500, ≥500',
					'grouping' => 'Number of employers',
					'unavailable' => array ('1871'),
				),
				'N_Emp_Fem' => array (
					'label' => 'Female',
					'description' => 'Number of employers, female',
					'intervals' => '<20, 20 - <100, 100 - <250, 250 - <500, ≥500',
					'grouping' => 'Number of employers',
					'unavailable' => array ('1871'),
				),
				'N_OA_Total' => array (
					'label' => 'Total',
					'description' => 'Number of own-account, total',
					'intervals' => '<100, 100 - <250, 250 - <500, 500 - <1000, ≥1000',
					'grouping' => 'Number of own-account',
					'unavailable' => array ('1871'),
				),
				'N_OA_Male' => array (
					'label' => 'Male',
					'description' => 'Number of own-account, male',
					'intervals' => '<100, 100 - <250, 250 - <500, 500 - <1000, ≥1000',
					'grouping' => 'Number of own-account',
					'unavailable' => array ('1871'),
				),
				'N_OA_Fem' => array (
					'label' => 'Female',
					'description' => 'Number of own-account, female',
					'intervals' => '<100, 100 - <250, 250 - <500, 500 - <1000, ≥1000',
					'grouping' => 'Number of own-account',
					'unavailable' => array ('1871'),
				),
				'EntRate_To' => array (
					'label' => 'Total',
					'description' => 'Entrepreneurship rate, total',
					'intervals' => '<10, 10 - <15, 15 - <20, 20 - <25, ≥25',
					'grouping' => 'Entrepreneurship rate',
					'unavailable' => array ('1871'),
				),
				'EntRate_Ma' => array (
					'label' => 'Male',
					'description' => 'Entrepreneurship rate, male',
					'intervals' => '<10, 10 - <15, 15 - <20, 20 - <25, ≥25',
					'grouping' => 'Entrepreneurship rate',
					'unavailable' => array ('1871'),
				),
				'EntRate_Fe' => array (
					'label' => 'Female',
					'description' => 'Entrepreneurship rate, female',
					'intervals' => '<10, 10 - <15, 15 - <20, 20 - <25, ≥25',
					'grouping' => 'Entrepreneurship rate',
					'unavailable' => array ('1871'),
				),
				'RateEA1' => array (
					'label' => 'Agriculture',
					'description' => 'Entrepreneurship rate, agriculture (M+F) ',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA2' => array (
					'label' => 'Mining and quarrying',
					'description' => 'Entrepreneurship rate, mining and quarrying (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA3' => array (
					'label' => 'Construction',
					'description' => 'Entrepreneurship rate, construction (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA4' => array (
					'label' => 'Manufacturing',
					'description' => 'Entrepreneurship rate, manufacturing (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA5' => array (
					'label' => 'Maker-dealers',
					'description' => 'Entrepreneurship rate, maker-dealers (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA6' => array (
					'label' => 'Retail',
					'description' => 'Entrepreneurship rate, retail (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA7' => array (
					'label' => 'Transport',
					'description' => 'Entrepreneurship rate, transport (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA8' => array (
					'label' => 'Professional services',
					'description' => 'Entrepreneurship rate, professional services (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA9' => array (
					'label' => 'Personal services',
					'description' => 'Entrepreneurship rate, personal services (M+F) ',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA10' => array (
					'label' => 'Agricultural processing',
					'description' => 'Entrepreneurship rate, agricultural processing (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA11' => array (
					'label' => 'Food retailing',
					'description' => 'Entrepreneurship rate, food retail (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA12' => array (
					'label' => 'Lodging and refreshment',
					'description' => 'Entrepreneurship rate, lodging and refreshment (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'RateEA13' => array (
					'label' => 'Finance and commerce',
					'description' => 'Entrepreneurship rate, finance and commerce (M+F)',
					'intervals' => '<5, 5 - <15, 15 - <20, 20 - <50, ≥50',
					'grouping' => 'Rates by sector',
					'unavailable' => array ('1871'),
				),
				'Dec_Farm' => array (
					'label' => 'Farm',
					'description' => 'Mean number of employees declared by farm business proprietors',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size declared',
					'unavailable' => array ('1891, 1901, 1911'),
				),
				'Dec_Nfarm' => array (
					'label' => 'Non-farm',
					'description' => 'Mean number of employees declared by non-farm business proprietors',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size declared',
					'unavailable' => array ('1891, 1901, 1911'),
				),
				'Dec_Mining' => array (
					'label' => 'Mining and quarrying',
					'description' => 'Mean number of employees declared by mining and quarrying business proprietors',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size declared',
					'unavailable' => array ('1891, 1901, 1911'),
				),
				'Dec_Constr' => array (
					'label' => 'Construction',
					'description' => 'Mean number of employees declared by construction business proprietors',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size declared',
					'unavailable' => array ('1891, 1901, 1911'),
				),
				'Dec_Manu' => array (
					'label' => 'Manufacturing',
					'description' => 'Mean number of employees declared by manufacturing business proprietors',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size declared',
					'unavailable' => array ('1891, 1901, 1911'),
				),
				'Dec_AgPro' => array (
					'label' => 'Agricultural processing',
					'description' => 'Mean number of employees declared by agricultural processing business proprietors',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size declared',
					'unavailable' => array ('1891, 1901, 1911'),
				),
				'Dec_Retail' => array (
					'label' => 'Retail',
					'description' => 'Mean number of employees declared by retail business proprietors (EA6 + EA11)',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size declared',
					'unavailable' => array ('1891, 1901, 1911'),
				),
				'WoverE_Tot' => array (
					'label' => 'All businesses',
					'description' => 'Mean number of workers per employer, all businesses',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size from status',
					'unavailable' => array ('1871'),
				),
				'WoverE_Min' => array (
					'label' => 'Mining and quarrying',
					'description' => 'Mean number of workers per employer, mining and quarrying',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size from status',
					'unavailable' => array ('1871'),
				),
				'WoverE_Con' => array (
					'label' => 'Construction',
					'description' => 'Mean number of workers per employer, construction',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size from status',
					'unavailable' => array ('1871'),
				),
				'WoverE_Man' => array (
					'label' => 'Manufacturing',
					'description' => 'Mean number of workers per employer, manufacturing',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size from status',
					'unavailable' => array ('1871'),
				),
				'WoverE_AgP' => array (
					'label' => 'Agricultural processing',
					'description' => 'Mean number of workers per employer, agricultural processing',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size from status',
					'unavailable' => array ('1871'),
				),
				'WoverE_Ret' => array (
					'label' => 'Retailing',
					'description' => 'Mean number of workers per employer, retail (EA6 +EA11)',
					'intervals' => '<5, 5 - <10, 10 - <20, 20 - <30, ≥30',
					'grouping' => 'Firm size from status',
					'unavailable' => array ('1871'),
				),
				'PortfolioR' => array (
					'label' => 'Portfolio business rate',
					'description' => 'Percentage of business proprietors with portfolio business',
					'intervals' => '<3, 3 - <7, 7 - <11, 11 - <15, ≥15',
					'grouping' => 'Portfolio businesses',
				),
			),
		);
		
		# Merge in the default defaults
		$defaults += parent::defaults ();
		
		# Return the defaults
		return $defaults;
	}
	
	
	# Database structure
	public function databaseStructureSpecificFields ()
	{
		# Compile the SQL
		$sql = "
			  /* Domain-specific fields */
			  `REGDIST` VARCHAR(255) NOT NULL COMMENT 'Registration district',
			  `CEN` INT(11) NOT NULL COMMENT 'CEN (e.g. from CEN_1851)',
			  `TOWN` VARCHAR(255) NOT NULL COMMENT 'Town',
			  `UrbanClass` VARCHAR(255) NOT NULL COMMENT 'Urban classification',
		";
		
		# Add each data field
		foreach ($this->settings['fields'] as $field => $attributes) {
			if (!isSet ($attributes['general']) && !in_array ($field, array ('TYPE', '_'))) {
				$sql .= "\n\t\t\t  `{$field}` DECIMAL(14,7) NULL COMMENT '" . str_replace ("'", "\\'", $attributes['label']) . "',";
			}
		}
		
		# Return the SQL
		return $sql;
	}
	
	
	# Additional initialisation
	public function main ()
	{
		# Determine the extended application (repository) directory
		$this->extendedApplicationRoot = dirname (__FILE__);
		
		# Set the exports directory
		$this->settings['exportsDirectory'] = "{$this->extendedApplicationRoot}/exports/";
		
		# Run base main
		parent::main ();
		
	}
	
	
	# Home page
	public function home ($aboutPath = false, $additionalCss = false)
	{
		# Set local styles - reduction of panel from 330px down by 70px
		echo '
		<style type="text/css">
			body #mapcontainers nav {width: 260px;}
			body .activearea {right: 260px;}
			body .leaflet-control-layers, body .leaflet-control-attribution, body .summary {right: 260px;}
			body .summary {width: 270px;}
			body .geocoder input {width: 200px;}
		</style>
		';
		
		# Run the main map
		return parent::home ($this->extendedApplicationRoot);
	}
}

?>
